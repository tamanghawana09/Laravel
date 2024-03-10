<?php  
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST')
    {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $pnumber = $_POST['pnumber'];
        $email = $_POST['email'];
    
        $sql = "INSERT INTO contacts(first_name,middle_name,last_name,email,phone_number) VALUES ('$fname','$mname','$lname','$email','$pnumber')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Inserted into table";
        }
        header("Location: index.php");
    }
?>