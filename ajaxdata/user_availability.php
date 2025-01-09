<?php
$db = new mysqli('localhost','root','','jquery_evidance');
if(isset($_POST['email'])){
    $email = trim($_POST['email']);
    $email_address = $db->query("select email from user where email='$email'");
    list($_email)=$email_address->fetch_row();
    if($email == $_email){
        echo "<span style='color:green'>Email Available</span>";
    }else{
        echo "<span style:'color:red'>Email Not available!</span>";
    }
}
?>