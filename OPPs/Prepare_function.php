<?php 
    
    # 1) Connection:
    // $conn = new mysqli(Server Name, User Name, Password, Database Name)

    # 2) Run SQL Query:

    $sql = $conn->prepare("SELCET * FROM users WHERE user = ? AND pass = ?");
    $sql->bind_param("ss", $username, $password);
    $sql->execute();

    # 3) Close Connection:
    $conn->close() ;
    $sql->close();



?>
