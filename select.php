<?php
$con = mysqli_connect("localhost", "breezemun", "anstmddlr1!", "breezemun") or die("MySQL ���� ����.");

$sql ="
    SELECT * FROM userTBL
";

$ret = mysqli_query($con, $sql);

if($ret) {
    echo mysqli_num_rows($ret). "���� �˻���. <br><br>";
}
else {
    echo "userTBL ������ �˻� ����.", "<BR>";
    echo "���� ���� : ".mysqli_error($con);
    exit();
}

while($row = mysqli_fetch_array($ret)) {
    echo $row['userID'], " ", $row['userName'], " ", $row['height'], " ", "<br>";
}

mysqli_close($con);
?>