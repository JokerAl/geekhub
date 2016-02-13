<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atom</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body id="form_data">

<?php

$name = $_POST['username'];
$email = $_POST['useremail'];
$date = $_POST['date'];
$tel = $_POST['telephone'];
$beer = $_POST['beer'];
$sex = $_POST['sex'];
$old = $_POST['old'];
$form_data = [
    'Name'=>$name,
    'Email'=>$email,
    'Date'=>$date,
    'Tel'=>$tel,
    'old'=>$old,
    'sex'=>$sex
];
function clean($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    return $value;
}
function check_length($value = "", $min, $max)
{
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
$name = clean($name);
$email = clean($email);
$tel = clean($tel);
$date = clean($date);
$old = clean($old);

if (!empty($name) && !empty($old) && !empty($email) && !empty($date) && !empty($tel) && !empty($beer) && !empty($sex)) {
    if (check_length($name, 2, 20) && check_length($old, 1, 3) && check_length($tel, 6, 13)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("|[0-9]$|i", $tel) && preg_match("|[A-Za-zА-Яа-я]$|i", $name)) {
            echo "Спасибо за сообщение";
            
            // print_r($form_data);
        echo "<dl>";  
        foreach($form_data as $key => $value) 
  { 
     echo 
   "<dt> $key =</dt>
   <dd> $value </dd>";
         
  } echo "</dl>";
  if(!empty($_POST['beer'])) {
   echo "<dt> Beer =</dt>";
    foreach($_POST['beer'] as $check) {
            echo 
   "<dd> $check </dd>";}}
    
        } else {
            echo "Введенные данные некорректные";
        }
    } else { // добавили сообщение
        echo "Превышен лимит введенных символов";
    }
} else { // добавили сообщение
    echo "Заполните пустые поля";
}?>
</body>
</html>