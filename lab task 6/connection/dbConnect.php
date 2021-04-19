<?php

class db
{

    function OpenConn()
    {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "mydatabase";

        $conn = new mysqli($serverName, $userName, $password, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connection ready";
        }
        return $conn;
    }

    function InsertUser($connObj, $name, $userName, $password, $type)
    {
        $result = $connObj->query("INSERT INTO `user` (`name`, `username`, `password`, `type`) 
                                VALUES ('$name', '$userName', '$password', '$type')");
        if ($result == TRUE) {
            return "Data Inserted Sucessfully.";
        } else {
            return "Error: <br>" . $connObj->error;
        }
    }
    
    function Insertmanageroperation($connObj, $id, $name, $email, $userName, $password, $gender, $dob, $phone, $address, $salary)
    {
        $result = $connObj->query("INSERT INTO `manageroperation` (`ID`, `Name`, `EMAIL`, `U_Name`, `Password`, `Gender`, `DOB`) VALUES ('$id','$name', '$email', '$userName', '$password', '$gender', '$dob')");
        if ($result == TRUE) {
            return "Data Inserted Sucessfully.";
        } else {
            return "Error: <br>" . $connObj->error;
        }
    }
    
    function ShowAll($connObj)
    {
        $result = $connObj->query("SELECT * FROM  manageroperation");
        return $result;
    }

    function CheckUser($connObj, $uname, $password){
        $result = $connObj->query("SELECT * FROM manageroperation WHERE U_name='$uname' AND Password='$password'");
        return $result;
    }
    
    function CloseConn($connObj)
    {
        $connObj->close();
    }
    
}
