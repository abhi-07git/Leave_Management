<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "leave_mgst";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn)
    {
    die("Error". mysqli_connect_error());
    }
    $student_name = $_POST['student_name'];
    $college_email = $_POST['college_email'];
    $Registration_id = $_POST['Registration_id'];
    
     
    $sql = "SELECT * FROM `student_login` where student_name='$student_name' AND college_email='$college_email' AND Registration_id='$Registration_id'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($num == 1){
        session_start();
        $_SESSION['mail-id'] = $row['college_email'];
        if(isset($_SESSION['mail-id'])){
            header("location: second.php");
            // echo "<script>alert('successfully login')</script>";
        }
        else
        {
            //$showError = "Invalid Credentials";
            header("location: first.php");
        } 
     
    } 
    else{
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>