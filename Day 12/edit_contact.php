<?php  
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST')
    {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $pnumber = $_POST['pnumber'];
        $email = $_POST['email'];
    
        $sql = "UPDATE contacts SET first_name = '$fname' , middle_name='$mname', last_name = '$lname', phone_number = '$pnumber', email ='$email' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        header("Location: index.php");
    }
?>