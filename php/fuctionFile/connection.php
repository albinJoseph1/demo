<?php
    $servername = "localhost"; 
    $username = "albin"; 
    $password = "start"; 
    $dbname = "classroom";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "Error connecting to";
        die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "SELECT * FROM teacher WHERE teacher_id = 2";
    // //echo $sql;
    
    // // $sql = "SELECT * FROM teacher WHERE teacher_email = '1111111111' AND teacher_password = '12'";
    // $out = $conn->query($sql);
    // //echo $out;
    //  if ($out->num_rows > 0) {
    //     //echo("if2");
    //     $row = $out->fetch_assoc();
    //     echo $row["teacher_name"];
    //     echo $row["teacher_email"];
    //  }


    //     $row = $out->fetch_assoc();
    //     $_SESSION["teacher_id"] = $row["teacher_id"];
    //     echo json_encode(array("status" => "success", "name" => $row["teacher_name"]));
    // } 
    // else {
    //     echo("else");
    //     // echo json_encode(array("status" => "error", "message" => "mismatch"));
    //     echo json_encode(array("status" => "error", "message" => "mismatch"));

    // }
?>