<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    # Ab hum connection bana ga:
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection Failed: " . $conn->connect_errno);
    }
    
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    # Show Data :
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "Id: {$row['id']} - Name: {$row['student_name']} - Age: {$row['age']}.<br>";
        }
    }
    else{
        echo" No result found.";   
    }

    $conn->close();
?>
