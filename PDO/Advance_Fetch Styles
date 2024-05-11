<?php 
    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";
    
    $conn = new PDO($db_name, $username, $password);

// $sql = $conn->prepare("SELECT * FROM students");
// $sql->execute();

# Ya Method colum ko retrive kr k da ga.
// $result = $sql->fetchAll(PDO::FETCH_COLUMN, 3);

# Fetch Grouping:

// $sql = $conn->prepare("SELECT city, student_name, age FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);

# Fetch Unique:

# Agar hum saraf city dakna chahta hai to iss ko use kra ga 
// $sql = $conn->prepare("SELECT city FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);

# Fetch Key Pair:
# it uses only two columns value.

// $sql = $conn->prepare("SELECT  student_name , city FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_KEY_PAIR);

# Fetch Class:

// $sql = $conn->prepare("SELECT  * FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_CLASS);

# Same work obj:
// $result = $sql->fetchAll(PDO::FETCH_OBJ);


// echo "<pre>";
// print_r($result);
// echo "</pre>";

# 1) ROW Count Method : Number of row katine affect hui hai.

# Let Example:

// $sql = $conn->prepare("SELECT  * FROM students");


# Ab ma un student ka record dakna chahta hui jo KHW say hai:

// $sql = $conn->prepare("SELECT  * FROM students WHERE city = 'KHW'");

# Ab hum Update query ko run kr k dakha tha hai:

// $sq = "UPDATE students SET city= 'Krachi' WHERE city = 'KHW' ";

// $sql = $conn->prepare($sq);

// $sql->execute();

// echo $sql->rowCount();

# 2) Exec Method:

// $sq = "UPDATE students SET city= 'KHW' WHERE city = 'Krachi' ";

// # Ap ko ek baat remember krane hai hum select k quer ni run kr sakta iss method ma.

// $result= $conn->exec($sq);

// echo $result;

# 3) Last Insert Method:

$sq = "INSERT INTO students (student_name, city , age) VALUES(? , ? ,?) ";

$sql = $conn->prepare($sq);

$sql->execute(["Hammad", "Multan","22"]);

echo $conn->lastInsertId();
    
?>
