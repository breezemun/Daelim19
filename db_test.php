<?php
$db_host = "localhost";
$db_user = "breezemun";
$db_password = "anstmddlr1!";
$db_name = "breezemun";
$con = mysqli_connent($db_host, $db_user, $db_password, $db_name);
if(mysqli_connect_error($con)){
    echo "MySQL 접속 실패!!", "<BR>";
    echo "오류 원인 : ", mysqli_connent_error();
    exit();
}
echo "MySQL 접속 완전히 성공!!";
mysqli_close($con);
?>

