<?php
/**
 * admin & XCRUD
 */
class admin extends Controller
{
	function __construct()
	{
		// no db test
	}
	function super($nameAdmin='admin',$pageview='movie',$action='')
	{
		if(isset($nameAdmin) && !empty($nameAdmin)){
			$t = $this->loadView('sectionLayout/main',true);

			// $loadTable = $this->loadAdmin();

			// switch ($pageview) {
			// 	case 'movie':
			// 	$loadTable = $this->movie($loadTable);
			// 	break;
			// 	case 'ads':
			// 	$loadTable = $this->movie($loadTable);
			// 	break;
				
			// 	default:
			// 	$loadTable = $this->movie($loadTable);
			// 	break;
			// }

			// if($action == 'add'){
			// 	$t->set('loadTable',$loadTable->render('create'));
			// }else{
				// $t->set('loadTable',$loadTable->render());
			// }

			$t->set('pageview',$pageview);
			$t->set('nameAdmin',$nameAdmin);

			$t->render();
		}else{
			$this->redirect('/error_view');
		}
	}


	private function movie($loadTable){
		// $loadTable->table('table_name');
		// $loadTable->table_name('รายการหนัง');
		// $loadTable->columns('img,name,view,date_update');
		// $loadTable->label(
		// 	array(
		// 		'img' => 'รูป',
		// 		'name' => 'ชื่อ',
		// 		'tag' => 'คำค้นหาหนัง',
		// 		'codehtml' => 'โค๊ตหนัง',
		// 		'view' => 'จำนวนดู',
		// 		'date_update' => 'อัพเดจล่าสุด',
		// 		'trailer' => 'ตัวอย่างหนัง',
		// 		'catalog' => 'หมวดหมู 1',
		// 		'catalog2' => 'หมวดหมู 2',
		// 		'catalog3' => 'หมวดหมู 3',
		// 		'catalog4' => 'หมวดหมู 4',
		// 		'catalog5' => 'หมวดหมู 5',

		// 	)
		// );

		// $loadTable->field_tooltip('trailer','ใส่ลิ้ง youtube หรือไม่ใส่ก็ได้');
		// 	$loadTable->field_tooltip('codehtml','ใส่ URL ของ Youtube,openload.co,oload.live,stream-cdn.com'); //dailymotion.com,MP4

		// 	$loadTable->fields(
		// 		array(
		// 			'name',
		// 			'codehtml',
		// 			'tag',
		// 			'img',
		// 			'trailer',
		// 			'catalog',
		// 			'catalog2',
		// 			'catalog3',
		// 			'catalog4',
		// 			'catalog5',
		// 			'detail'
		// 		)
		// 	);

		// 	$loadTable->relation('catalog','lp_catalog','id','name');
		// 	$loadTable->relation('catalog2','lp_catalog','id','name');
		// 	$loadTable->relation('catalog3','lp_catalog','id','name');
		// 	$loadTable->relation('catalog4','lp_catalog','id','name');
		// 	$loadTable->relation('catalog5','lp_catalog','id','name');

		// 	$loadTable->pass_var('date_update', date('Y-m-d H:i:s'));
		// 	$loadTable->pass_var('date',date('Y-m-d H:i:s'),'create');

		// 	$loadTable->change_type('img','image','',array(
		// 		'thumbs'=>array(
		// 			array('width'=> 70, 'folder'=>'thumbs_small'),
		// 			array('width'=> 250, 'folder'=>'thumbs_middle')
		// 		)
		// 	));

		// 	$loadTable->no_editor('name,tag,trailer,codehtml');

		// 	$loadTable->order_by('date_update','DESC');

			return $loadTable;
		}
	}