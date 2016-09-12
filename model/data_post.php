<?php
require_once('../config/database.php');
class DataPost{
	public static function upload()
	{
		global $conn;
		$cookie_name = "user_id";
		if(!isset($_COOKIE[$cookie_name])) 
		{
			$check=$conn->query("SELECT * FROM `user_details` WHERE `user_email`='".$_POST['email']."'");
			if($check->num_rows > 0)
			{
				header('Content-Type:application/json');
				$array=array('msg'=>'Email already exists','id'=>'','type'=>'error');
				echo json_encode($array);
				exit;
			}
			else
			{
			$qry=$conn->query("INSERT INTO `user_details` (`name`,`user_email`,`industry`,`registration_date`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['industry']."','".date('Y-m-d')."')");
				if($qry=== TRUE)
				{
					$id=$conn->insert_id;
					header('Content-Type:application/json');
					setcookie($cookie_name, $id, time() + (86400 * 30), "/");
					$array=array('msg'=>'Data is saved successfully','id'=>$id,'type'=>'success');
					echo json_encode($array);
					exit;
				}
			}
		}
		else
		{
			$user_id=$_COOKIE[$cookie_name];
			$check=$conn->query("SELECT * FROM `user_details` WHERE `user_email`='".$_POST['email']."' AND `id`<>'".$user_id."'");
			if($check->num_rows > 0)
			{
				header('Content-Type:application/json');
				$array=array('msg'=>'Email already exists','id'=>'','type'=>'error');
				echo json_encode($array);
				exit;
			}
			else
			{
			$qry=$conn->query("UPDATE `user_details` SET `name`='".$_POST['name']."',`user_email`='".$_POST['email']."',`industry`='".$_POST['industry']."',`registration_date`='".date('Y-m-d')."' WHERE `id`='".$user_id."'");
				
				if($qry=== TRUE)
				{
					$id=$conn->insert_id;
					header('Content-Type:application/json');
					$array=array('msg'=>'Data is saved successfully','id'=>$id,'type'=>'success');
					echo json_encode($array);
					exit;
				}
			}
			
		}
		
	}
}
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	exit;  
}
DataPost::upload();
?>