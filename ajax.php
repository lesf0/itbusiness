<?
header('Content-Type: application/json');

set_error_handler(function($errno,$errstr,$errfile,$errline){
	die(json_encode(array('error'=>array(1,'server_error',$errstr,$errfile,$errline))));
});

try{
	$res = array();
	if(isset($_POST['action'])){
		$action = $_POST['action'];
		if(isset($_POST['data'])){
			$data = $_POST['data'];
		}
		if(ctype_alpha($action)){
			$filename = ROOT.'/functions/'.$action.'.php';
			if(file_exists($filename)){
				require($filename);
			}else{
				$res['error']=array(5,'missing action');
			}
		}else{
			$res['error']=array(4,'incorrect action',$action);
		}
	}else{
		$res['error']=array(3,'missing data');
	}
	echo json_encode($res);
}catch(Exception $e){
	die(json_encode(array('error'=>array(2,'unhandled exception',$e->getMessage()))));
}
?>