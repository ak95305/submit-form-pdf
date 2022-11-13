<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form action="mail.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname"><br>
        <label for="app-date">Appointment Date</label>
        <input type="text" name="app-date" id="app-date"><br>
        <label for="app-time">Appointment Time</label>
        <input type="text" name="app-time" id="app-time"><br>
        <label for="pno">Phone No</label>
        <input type="text" name="pno" id="pno"><br>
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email"><br>
        <label for="city">City</label>
        <input type="text" name="city" id="city"><br>
        <label for="state">State</label>
        <input type="text" name="state" id="state"><br>
        <label for="pincode">Pincode</label>
        <input type="text" name="pincode" id="pincode"><br>
        <label for="message-box">Message</label>
        <input type="text" name="message-box" id="message-box"><br>


        <br><br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>