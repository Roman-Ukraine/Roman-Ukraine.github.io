<?php

@$name = $_POST['name'];
@$phone = $_POST['phone'];
@$email = $_POST['email'];
@$massage = $_POST['massage'];
@$form_h = $_POST['form_h'];
@$robot_check = $_POST['robot_check'];
$headers = "Content-type: text/plain; charset = utf-8";


 
if($_POST['robot_check'] == '') {
mail("letters.ispeakeng@gmail.com",  "$form_h",
"Имя: $name \r\n\r\n Телефон: $phone \r\n\r\n ", "$headers");

}

?>
