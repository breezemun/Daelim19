<?php
$con = mysqli_connect("localhost", "breezemun", "anstmddlr1!", "breezemun") or die("MySQL ���� ����.");

$sql ="
    SELECT * FROM userTBL
";

$ret = mysqli_query($con, $sql);

if($ret) {
    $count = mysqli_num_rows($ret);
}
else {
    echo "userTBL ������ �˻� ����.", "<br>";
    echo "���� ���� : ".mysqli_error($con);
    exit();
}

    echo "<h1>ȸ�� �˻� ���</h1>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>���̵�</th> <th>�̸�</th> <th>����⵵</th> <th>����</th> <th>����</th>";
    echo "<th>��ȭ��ȣ</th> <th>Ű</th> <th>������</th> <th>����</th> <th>����</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>", $row['userID'], "</td>";
        echo "<td>", $row['userName'], "</td>";
        echo "<td>", $row['birthYear'], "</td>";
        echo "<td>", $row['addr'], "</td>";
        echo "<td>", $row['mobile1'], "</td>";
        echo "<td>", $row['mobile2'], "</td>";
        echo "<td>", $row['height'], "</td>";
        echo "<td>", $row['mDate'], "</td>";
        echo "<td>", "<a href='update.php?userID=", $row['userID'],"'>����</a> </td>";
        echo "<td>", "<a href='delete.php?userID=", $row['userID'],"'>����</a> </td>";
        echo "</tr>";
    }

mysqli_close($con);
echo "</table>";
echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>