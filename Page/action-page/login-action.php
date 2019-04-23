<?php

session_start();

if(isset($_POST['login'])){

    include("../connection.php");

    if (!$conn){
        die("Could not connect: ".mysql_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

        /*echo "The username is ".$username."<br>";
        echo "The password is ".$password."<br>";
        echo "The user type is ".$userType."<br>";*/

    if(empty($username) || empty($password) || $userType == '-Select-'){

        echo "Invalid entry! Please fill-up properly.<br> Click <a href='../../login.php'>here</a> to login.";

    } else {
        if($userType == 'Admin'){
            $sql = "SELECT * FROM administration_tbl WHERE username = '".$username."' AND userpass = '".$password;
            $return = $conn->query($sql);

            while($row = $return->fetch_assoc()){
                $_SESSION['id'] = $row['adminID'];
                $_SESSION['uname'] = $row['username'];
                $_SESSION['pword'] = $row['userpass'];
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['mname'] = $row['middlename'];
                $_SESSION['lname'] = $row['lastname'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['utype'] = $row['userTYpe'];

                if(empty($row['middlename'])){
                    $_SESSION['admin'] = strtoupper(utf8_encode($row['firstname'])." ".strtoupper(utf8_encode($row['lastname'])));
                    echo "Welcome ".$_SESSION['admin'];

                } else {
                    $_SESSION['admin'] = strtoupper(utf8_encode($row['firstname'])." ".strtoupper(utf8_encode($row['middlename'])." ".strtoupper(utf8_encode($row['lastname']))));
                    echo "Welcome ".$_SESSION['admin'];
                }
            }
        } else if($userType == "User Personnel"){
            echo "User Personnel <a href='../../login.php'>Back</a>";
        } else {
            echo "Grantee <a href='../../login.php'>Back</a>";
        }
    }
}