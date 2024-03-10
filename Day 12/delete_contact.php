<?php  
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST')
    {
        $id = $_POST['delete_id'];
    
        $sql = "DELETE FROM contacts WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        header("Location: index.php");
    }
?>