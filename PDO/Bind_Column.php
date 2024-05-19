<?php
    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";

$conn = new PDO($db_name, $username, $password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT student_name, city FROM students");
$sql->execute();

# We are used bindColum when we bindcolum output value:

# Method No : 1
// $sql->bindColumn("student_name", $sname);
// $sql->bindColumn("city", $scity);

# Method No : 2
$sql->bindColumn(1, $sname);
$sql->bindColumn(2, $scity);

while($row = $sql->fetch()){
    echo "{$sname} -{$scity} <br> ";
}

?>
