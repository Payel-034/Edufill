<?php
session_start();

include "connection.php";

if(!empty($_POST["submit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query="select * from user where u_mail= ?";

    $stmt = $conn-> prepare($query);

    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows>0){
        $user=$result->fetch_assoc();
        if(password_verify($password,$user['u_password'])){
            $_SESSION['user_id'] = $user["u_id"];
            $_SESSION['user_fname'] = $user["u_fname"];
            $_SESSION['user_mname'] = $user["u_mname"];
            $_SESSION['user_lname'] = $user["u_lname"];
            $_SESSION['user_mail'] = $user["u_mail"];

            header("Location:homepage.php");
            exit();
        }
        else {
            echo "Invalid pass";
        }
    }
    else{
        echo "invalid email";
    }

    $stmt->close();
    $conn->close();
}
?>