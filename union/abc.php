

<?php

$mail=$_POST['email'];
echo $mail."<br/>";

$password=$_POST['password'];
echo $password."<br/>";

if($mail=="admin" && $password=="admin"){
    echo "scammed successfully";
}
else{
    echo "you are good at tech :) </br> ";
}

echo "Thank you for praticipating in our giveway🤑🤑. We'll let you if you win."
?>