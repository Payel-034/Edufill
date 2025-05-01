<?php
    include "connection.php";
    
    if(!empty($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["cnfPass"];
        $passEnc = password_hash($password, PASSWORD_DEFAULT);
        $gender = $_POST["gender"];
        
        // Gender value conversion (1 for male, 0 for female)
        if($gender == "male"){
            $genval = 1;
        } else {
            $genval = 0;
        }
        
        $state = $_POST["state"];
        $pincode = $_POST["pincode"];

        $query = "INSERT INTO `user` (`u_fname`, `u_mname`, `u_lname`, `u_password`, `u_mail`, `u_ph`, `u_gender`, `u_state`, `u_pin`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($query);

        // Adjusted bind_param types
        $stmt->bind_param("ssssssisi", $fname, $mname, $lname, $passEnc, $email, $phone, $genval, $state, $pincode);

        // Execute the statement
        if($stmt->execute()){
            // echo "";
            echo '<script>alert("Registration Successfull !")</script>';
            header("location:index.php");
        } else {
            echo "Registration Failed: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
?>
