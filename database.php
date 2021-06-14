<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$database="your_database";
// Create connection
$conn = mysqli_connect("localhost", "root", "", "kpidb", "3308") or die("Unable to connect to MySQL");


//user
function getUser($fname) {
    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);
    return $result;
  }

function addUser($fname,$pass, $type ,$email) {
    $sql = "INSERT INTO `userttable`(`name`, `password`, `type`, `email`) VALUES ('$fname','$pass','$type','$email')";
    $conn->query($sql);
  }
function updateUser($fname) {
    echo "$fname Refsnes.<br>";
  }

  function deleteUser($id) {
    $sql ="DELETE FROM `userkpi` WHERE $id";
    $conn->query($sql);
  }

//performance
  
function getPerformance($fname) {
    $sql = "SELECT * FROM `performance` WHERE";
    $result = $conn->query($sql);
    return $result;
  }

function addPerformace($performance , $value , $type) {
    $sql = "INSERT INTO `performance`(`performance`, `value`, `type`) VALUES ('$peformance','$value','$type')";
    $conn->query($sql);
  }
function updatePerformance($id,$performance , $value , $type) {
    $sql ="UPDATE `performance` SET `performance`=$performance,`value`=$value,`type`=$type WHERE $id";
    $conn->query($sql);
  }

  function deletePerformance($id) {
    $sql ="DELETE FROM `performance` WHERE $id";
    $conn->query($sql);
  }
//get  table 
function gettable($fname) {
    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);
    return $result;
  }
  function addtable($fname) {
    echo "$fname Refsnes.<br>";
  }
function updatetable($fname) {
    echo "$fname Refsnes.<br>";
  }

  function deletetable($fname) {
    echo "$fname Refsnes.<br>";
  }


$conn->close();
?>