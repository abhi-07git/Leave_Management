<?php session_start()?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "LOGIN_CONNECTION.php" ?>
    <div class="login-box">
        <form action="" method="POST">
            <div class="textbox">
                <label>Student Name</label>
                <input type="text" placeholder="name" name="student_name">
            </div>
            <div class="textbox">
                <label>College Mail-id</label>
                <input type="text" placeholder="mail-id" required name="college_email">
            </div>
            <div class="textbox">
                <label>Registration ID</label>
                <input type="text" placeholder="ID" required name="Registration_id">
            </div>
            <div>
                <input type="submit" class="btn" name="savedata" value="Login" <?php if ($_GET) {header("Location:second.php/");} ?>>
            </div>
            <a style="color:white; text-decoration:none;" href="regist.php" >Not registered</a>
        </form>
            <!-- <div class="not-registered-link" onclick="checkRegistration()">
            <a href="regist.php">Not registered?</a>
        </div> -->
    </div>

    
    <!-- <script>
    function checkRegistration() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var regId = document.getElementById("reg-id").value;

    // Perform validation and comparison with the database here
    // ...

    // For demonstration purposes, assuming the user is not registered
    showPopup();
}

function showPopup() {
    var popup = document.getElementById("popup-dialog");
    popup.classList.add("show");

    setTimeout(function () {
        popup.classList.remove("show");
    }, 3000); // Show for 3 seconds
}
</script> -->

</body>

</html>
