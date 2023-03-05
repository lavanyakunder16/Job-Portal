<?php


$servername="localhost";
$username="root";
$password="";
$database="jobs";

$conn=mysqli_connect($servername,$username,$password,$database);


if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}else{
    echo"Connection Established!";
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql=" INSERT INTO `register`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn,$sql)){
        echo"Records inserted successfully";
    } else{
        echo"ERROR: Couldn't execute $sql." .mysqli_error($conn);
    }
}
session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM `register` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
        
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jobdesc=$_POST['Jobdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `jobs`(`cname`, `position`, `Jobdesc`, `skills`, `CTC`) VALUES ('$cname','$position','$Jobdesc','$skills','$CTC')";
    if(mysqli_query($conn,$sql)){
        echo"New Job Posted!";
    }
    else{
        echo"ERROR:Failed to Post the Job $sql." .mysqli_error($conn);
    }

}

if(isset($_POST['go'])){
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    if(mysqli_query($conn,$sql)){
        echo"Candidate Successfully Applied!";
    }
    else{
        echo"ERROR:Failed to Apply for the Job $sql." .mysqli_error($conn);
    }

}


mysqli_close($conn);

?>