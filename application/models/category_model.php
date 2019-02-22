<?php

class category_model extends Model {
	
	public function getAllcategoryStie()
	{
		$Allcategory = $this->query('SELECT id,name FROM `lp_catalog`')->fetchAll();
		return $Allcategory;
	}

}

?>
