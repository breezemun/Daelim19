<?php
$db_host = "localhost";
$db_user = "breezemun";
$db_password = "anstmddlr1!";
$db_name = "breezemun";
$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if(mysqli_connect_error($con)){
    echo "MySQL ���� ����.", "<BR>";
    echo "���� ���� : ", mysqli_connect_error();
    exit();
}
echo "MySQL ���� ������ ����.";
mysqli_close($con);
?>

