<?php

class movie_model extends Model {
	
	public function getMovieMain($cateID='',$order='',$limit_movie='')
	{
		if($cateID == 0){
			$getMovieMain = $this->query("SELECT id,name,img,view,date,catalog,catalog2,catalog3,catalog4,catalog5 FROM lp_movie ORDER BY date_update DESC LIMIT $limit_movie")->fetchAll();
		}else{
			$getMovieMain = $this->query("SELECT id,name,img,view,date,catalog,catalog2,catalog3,catalog4,catalog5 FROM lp_movie WHERE catalog = ? OR catalog2 = ? OR catalog3 = ? OR catalog4 = ? OR catalog5 = ?  ORDER BY date_update DESC LIMIT $limit_movie",$cateID,$cateID,$cateID,$cateID,$cateID)->fetchAll();
		}
		return $getMovieMain;
	}

	public function getMovieMainTotal($cateID='')
	{
		if($cateID == 0){
			$getMovieMainTotal = $this->query("SELECT id,name,img,view,date,catalog,catalog2,catalog3,catalog4,catalog5 FROM lp_movie  ORDER BY date_update DESC")->numRows();
		}else{
			$getMovieMainTotal = $this->query("SELECT id,name,img,view,date,catalog,catalog2,catalog3,catalog4,catalog5 FROM lp_movie WHERE catalog = ? OR catalog2 = ? OR catalog3 = ? OR catalog4 = ? OR catalog5 = ?  ORDER BY date_update DESC",$cateID,$cateID,$cateID,$cateID,$cateID)->numRows();
		}
		return $getMovieMainTotal;
	}

	public function getPopular($days='7',$limit='10')
	{
		$Popular = $this->query('SELECT id,name,img,detail FROM `lp_movie` WHERE date_view > DATE_SUB(NOW(), INTERVAL ? day) ORDER BY view DESC LIMIT ?',$days,$limit)->fetchAll();
		return $Popular;
		
	}

	public function getDetail($id='')
	{
		$this->query('UPDATE `lp_movie` SET `view` = `view`+1 WHERE `lp_movie`.`id` = ?;',$id);
		$getDetail = $this->query('SELECT * FROM `lp_movie` WHERE id = ?',$id)->fetchArray();
		return $getDetail;
	}

	public function getPlayDetail($id='')
	{
		$getPlayDetail = $this->query('SELECT * FROM `lp_url_out` WHERE id = ?',$id)->fetchArray();
		return $getPlayDetail;
	}

	public function updateCodeMovie($dV,$id){
		if ($dV['date'] == $dV['date_update'] && $dV['codehtml_2'] != "") {
			$dV['codehtml'] = $dV['codehtml_2'];
		}else{
			$regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
			$dV['codehtml'] = str_replace('<a', '<a title="'.strip_tags($dV['name']).'" tag="'.strip_tags($dV['name']).'"', str_replace('rel="nofollow"', '',str_replace("<a","<a target='_blank'",$dV['codehtml'])));

			if(preg_match_all("/$regexp/siU", $dV['codehtml'], $matches, PREG_SET_ORDER)) {
				foreach($matches as $match) {
					$url_insert = base64_encode($match['2']);
					$Query_url_insert =  $this->query("SELECT * FROM `lp_url_out` WHERE encode= ?",$url_insert);
					$rows_url_insert = $Query_url_insert->numRows();
					if ($rows_url_insert>0) {
						$Result_url_insert = $Query_url_insert->fetchArray();
						$url_insert = $Result_url_insert['id'];
					}else{
						$insert_ = $this->query("INSERT INTO `lp_url_out` (`name`, `encode`, `decode`, `view`, `idmovie`) VALUES (?, ?, ?, ?,?);",strip_tags($dV['name'].$match['3']),$url_insert,$match['2'],0,$id);
						$url_insert = $insert_->last_id();
					}

					$urlreplmovielink = BASE_URL."p/".$url_insert."/";

					$dV['codehtml'] = str_replace($match['2'], $urlreplmovielink, $dV['codehtml']);
				}
			}

			$this->query("UPDATE `lp_movie` SET `date_update` = ?,`codehtml_2` = ? WHERE id = ?;",$dV['date'],$dV['codehtml'],$id);
		}

		return $dV;
	}
}

?>
