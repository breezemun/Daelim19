<?php
$con = mysqli_connect("localhost", "breezemun", "anstmddlr1!", "breezemun") or die("MySQL ���� ����!!");

$sql ="
CREATE TABLE IF NOT EXISTS userTBL
(   userID CHAR(8) NOT NULL PRIMARY KEY,
    userName VARCHAR(10) NOT NULL,
    birthYear INT NOT NULL,
    addr CHAR(2) NOT NULL,
mobile1 CHAR(3),
mobile2 CHAR(8),
height SMALLINT,
mDate DATE
)
";

$ret = mysqli_query($con, $sql);

if($ret) {
    echo "userTBL�� ���������� ������.";
}
else {
    echo "userTBL ���� ����!!!", "<BR>";
    echo "���� ���� : ".mysqli_error($con);
}

mysqli_close($con);
?>