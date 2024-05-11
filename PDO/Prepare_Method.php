<?php 
    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";
    
    $conn = new PDO($db_name, $username, $password);

# Contion k liya :
// $city= "Lahore";
// $id = 1;

# Run Query:
# Method No: 1
// $sql = $conn->prepare("SELECT * FROM students WHERE city = ? AND id > ?");

# Same work bindvalue and bindpara
// $sql->bindValue(1, $city , PDO::PARAM_STR);
// $sql->bindValue(2, $id , PDO::PARAM_INT);
// $sql->execute();

# Method No :2
// $sql = $conn->prepare("SELECT * FROM students WHERE city = :city AND id > :id");
// $sql->bindValue(':city', $city, PDO::PARAM_STR);
// $sql->bindValue(':id', $id , PDO::PARAM_INT);
// $sql->execute();

# Agar hun apper wala code execute ma chalana hai to :
// $sql->execute(array(':city' => $city, ':id' => $id));

# Method No :3
// $sql = $conn->prepare("SELECT * FROM students WHERE city = ? AND id > ?");


# Agar ap apper wala code ko short krna chahta hai to ya method uses kra:
// $sql->execute(array($city, $id));


# Using Condition:
// $sql = $conn->query("SELECT * FROM students WHERE city = 'Lahore'");

# AB ma value ko Insert krva na chahta hu:
    $name = "Wahab";
    $city = "Multan";
    $id = 7;

    $sql = $conn->prepare("INSERT INTO students (student_name, city, id) VALUES (:name, :city, :id)");
    $sql->execute(array(':name' => $name, ':city' => $city, ':id' => $id));

    // $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // # Print krna ka Method:
    // if(count($result)){
    //     foreach($result as $row){
    //         echo "{$row['id']} - {$row['student_name']} - {$row['city']} - {$row['age']} <br>";
            
    //     }
    // }else{
    //     echo "No Record Found ";
    // }
    
?>
