<?php 
    try{
    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);
    
    $sql = $conn->prepare("SELECT * FROM students");
    $sql->execute();

    $error = $sql->errorInfo();
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    if ($error[1]) {
        # Error ka code watch krna k liya:
        echo $sql->errorCode();
        echo $error[2];
    } else {
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
?>
