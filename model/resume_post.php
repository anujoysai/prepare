<?php
require_once('../config/database.php');
class ResumePost{
	public static function upload()
	{
		global $conn;
		$cookie_name = "user_id";
		if(isset($_COOKIE[$cookie_name])) 
		{
			//print_r($_FILES['file_source']);
			if(move_uploaded_file($_FILES['file_source']['tmp_name'],'../resume/'.time()."_".$_FILES['file_source']['name']))
			{
				$qry=$conn->query("UPDATE `user_details` SET `resume`='".time()."_".$_FILES['file_source']['name']."' WHERE `id`='".$_COOKIE[$cookie_name]."'");
				header('Content-Type:application/json');
				$array=array('msg'=>'Resume is uploaded successfully','id'=>$_COOKIE[$cookie_name],'type'=>'success');
				echo json_encode($array);
				exit;
			}
			else
			{
				header('Content-Type:application/json');
				$array=array('msg'=>'Sorry! Resume is not uploaded successfully','id'=>$_COOKIE[$cookie_name],'type'=>'error');
				echo json_encode($array);
				exit;
			}
		}
		else
		{
			header('Content-Type:application/json');
			$array=array('msg'=>'Please fill up your info first','id'=>'','type'=>'error');
				echo json_encode($array);
				exit;
		}
	}
}
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	exit;  
}
ResumePost::upload();
?>

