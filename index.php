<?php
require_once('include/cms_application.php');

$app = new cms_application(); //tanda $ menunjukkan variable dalam php
if (isset($_REQUEST['task']))//isset : memastikan variable sudah dideklarasi
{
	$task = $REQUEST['task']; //jika di isi 'task' maka jawabannya adl 'any'
	switch ($task){
		case 'addcontent':
			$app->addcontent();
			break;
		case 'anyothertask':
			$app->anyothertask();
			break;
		default :
			$app->viewcontent(); //jika jawabannya selain 'anyothercontent'
	}	
	}else {
		$app->viewcontent(); //-> memanggil fungsi dalam kelas
}