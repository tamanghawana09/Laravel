<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="add_contact.php" method="post">
        
        <input type="text" placeholder="First Name" name="fname"><br><br>
        <input type="hidden" id="custId" name="custId" value="1">
        <input type="text" placeholder="Middle Name" name= "mname"><br><br>
        <input type="text" placeholder="Last Name" name="lname"><br><br>
        <input type="text" placeholder="Phone Number" name="pnumber"><br><br>
        <input type="text" placeholder="Email Address" name="email"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>