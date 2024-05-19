<?php
try {
    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";

    # IF we are uses Multiple Attribute :
    $options = [
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $conn = new PDO($db_name, $username, $password, $options);
    
    # This is use simple method:
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();

    $sql1 = $conn->prepare("INSERT INTO students (student_name, age, city) VALUES (?,?,?)");
    $sql2 = $conn->prepare("UPDATE city SET cstudents = cstudents + 1 WHERE cname = ?");

    $sql1->execute(["Khan", "73", "Pk"]);
    $sql2->execute(["Hadrybad"]);
    
    # AB hum ya manual write krna ke zarott ni hai.
    // if(!$sql1->execute(["Rao", "23" ,"Multan" ])){
    //     throw new Exception('SQL 1 Recond not work. ');
    // }
    
    // if(!$sql2->execute(["Hadrybad"])){
    //     // throw new Exception('SQL 2 Recond not work. ');  
    // }
    
    $conn->commit();
    echo "All data saved.";
}catch(Exception $e){
    $conn->rollBack();
    echo $e->getMessage();
}
?>
