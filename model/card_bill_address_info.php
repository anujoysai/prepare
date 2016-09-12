<?php
require_once('../config/database.php');
require '../sendgrid/vendor/autoload.php';
require '../sendgrid/lib/SendGrid.php';
class CardBillInfoAddress{
	public static function upload()
	{
		global $conn;
		$cookie_name = "user_id";
		if(isset($_COOKIE[$cookie_name])) 
		{
			$qry=$conn->query("UPDATE `user_details` SET `cost`='".$_POST['price']."',`card_holder_name`='".$_POST['card_name']."',`card_number`='".$_POST['card_number']."',`card_month`='".$_POST['month']."',`card_year`='".$_POST['year']."',`ccv`='".$_POST['ccv']."',`address`='".$_POST['address']."',`city`='".$_POST['city']."',`state`='".$_POST['state']."',`zip`='".$_POST['zip']."',`country`='".$_POST['country']."' WHERE `id`='".$_COOKIE[$cookie_name]."'");
			if($qry)
			{
				$email=$conn->query("SELECT * FROM `user_details` WHERE `id`='".$_COOKIE[$cookie_name]."'");
				$details=$email->fetch_assoc();
				/*<tr>
							<td>Card Name</td><td>'.$details['card_holder_name'].'</td>
							</tr>
							<tr>
							<td>Card Number</td><td>'.$details['card_number'].'</td>
							</tr>
							<tr>
							<td>Month</td><td>'.$details['card_month'].'</td>
							</tr>
							<tr>
							<td>Year</td><td>'.$details['card_year'].'</td>
							</tr>
							<tr>
							<td>CCV</td><td>'.$details['ccv'].'</td>
							</tr>*/
				$template='<table>
							<tr>
							<td>Name</td><td>'.$details['name'].'</td>
							</tr>
							<tr>
							<td>Email</td><td>'.$details['user_email'].'</td>
							</tr>
							<tr>
							<td>Industry</td><td>'.$details['industry'].'</td>
							</tr>
							<tr>
							<td>Selected Package</td><td>$'.$details['cost'].'</td>
							</tr>
							
							<tr>
							<td>Address</td><td>'.$details['address'].'</td>
							</tr>
							<tr>
							<td>City</td><td>'.$details['city'].'</td>
							</tr>
							<tr>
							<td>State</td><td>'.$details['state'].'</td>
							</tr>
							<tr>
							<td>Zip</td><td>'.$details['zip'].'</td>
							</tr>
							<tr>
							<td>Country</td><td>'.$details['country'].'</td>
							</tr>
				           </table>';
				$sendgrid = new SendGrid('softamassindia', 'iloveme123');
				$email = new SendGrid\Email();
				$email
					->addTo("skyler@prepareu.co")
					->addTo("nick@prepareu.co")
					->setFrom('info@preapreu.com')
					->setSubject('New Registration')
					->setText('')
					->setHtml($template)
				;
				
				$sendgrid->send($email);
				unset($_COOKIE[$cookie_name]);
				setcookie('user_id', '', time() - 3600, '/');
				
				header('Content-Type:application/json');
				
					$array=array('msg'=>'Information is saved successfully','id'=>'','type'=>'success');
					echo json_encode($array);
					exit;
			}
			else
			{
				header('Content-Type:application/json');
				$array=array('msg'=>'Sorry! Information is not uploaded successfully','id'=>$_COOKIE[$cookie_name],'type'=>'error');
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
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']))
{
	exit;
}
CardBillInfoAddress::upload();
?>