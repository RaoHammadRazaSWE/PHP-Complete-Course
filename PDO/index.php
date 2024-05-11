<?php 
    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";
    
    # Create Connection PDO:
    $conn = new PDO($db_name, $username, $password);

    # Run Query:
    $sql = $conn->query("SELECT * FROM students");

    # Using Condition:
    // $sql = $conn->query("SELECT * FROM students WHERE city = 'Lahore'");
    
    # Fetch all fuction user knra say server ka load come hota hai.
    # Not use blew blow fetch method:
    $result = $sql->fetchAll(PDO::FETCH_NUM);

    # Print krna ka Method:
    if(count($result)){
        foreach($result as $row){
            echo "{$row[1]} <br>";
        }
    }else{
        echo "No Record Found ";
    }
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // while($row = $sql->fetch(PDO::FETCH_OBJ)){
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";

        # Print value Object:
        // echo "{$row['id']} - {$row['student_name']} - {$row['city']} - {$row['age']} <br>";
        
        # If You want proper value:
        // echo "{$row->id} - {$row->student_name} - {$row->city} - {$row->age} <br>";
        
        # Print value index array:
        // echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} <br>";
    // }
?>
