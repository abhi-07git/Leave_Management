<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "leave_mgst";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="container">
        <h1>Sign In</h1>
        <form id="signin-form" action="regist.php" method="GET">
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" id="name" name="student_name" required>
            </div>
            <div class="form-control">
                <label for="email">College Mail ID</label>
                <input type="email" id="email" name="college_email" required>
            </div>
            <div class="form-control">
                <label for="reg-id">Registration ID</label>
                <input type="text" id="reg-id" name="Registration_id" required>
            </div>
            <div>
            <input style="width: 40%;
                background:#353ebc;
                color: white;
                position: sticky;
                padding: 8px;
                font-size: 18px;
                cursor: pointer;
                border-radius: 15px;
                margin: 8px 0;
                border: 2px solid black;" type="submit" name="savedata" value="Sign-in"></input>
            </div>
        </form>
    </div>
    
    <?php
    if ($_GET['savedata']) {
        $student_name = $_GET['student_name'];
        $college_email = $_GET['college_email'];
        $Registration_id = $_GET['Registration_id'];

        $query2 = "INSERT INTO `student_login` (`student_name`, `college_email`, `Registration_id`) 
            VALUES ('$student_name', '$college_email', '$Registration_id');";

        $data = mysqli_query($conn, $query2);
    }
    ?>


    <!-- <div id="popup-dialog" class="popup">
        Not registered!
    </div> -->
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

