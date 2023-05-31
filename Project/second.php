<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="leave_mgst";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Leave Management System</title>

    <style>
        /* Styling the Body element i.e. Color, Font, Alignment */
        body {
            /*background: url("../images/1.jpeg");*/
            /* background-image: url('images/poornima.jpg');  */
            background-image: url(images/poornima.jpg);
            font-family: Verdana;
            text-align: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Styling the Form (Color, Padding, Shadow) */
        form {
           
            background-color: rgb(141, 189, 160);
            border-style: none;
            border-radius: 25px;
            border-width: 5px;
            max-width: 500px;
            height: 600px;
            margin: 50px auto;
            padding: 14px 16px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(18px) saturate(195%);
            -webkit-backdrop-filter: blur(18px) saturate(195%);
            background-color: rgba(17, 25, 40, 0.6);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
        }

        /* Styling form-control Class */
        .form-control {
            text-align: left;
            margin-bottom: 25px;
        } 

        /* Styling form-control Label */
        .form-control label {
            display: block;
            margin-bottom: 10px;
        }

        /* Styling form-control input, select, textarea */
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 10px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
            box-sizing: border-box;
        }

        /* Styling form-control Radio button and Checkbox */
        .form-control input[type="radio"],
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }

        /* Styling Button */
        .sum {
            background-color: #05c46b;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            width: 40%;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        /* Styling Pop-up Dialog Box */
        .popup {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
            border-radius: 10px;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s;
        }

        .popup.show {
            visibility: visible;
            opacity: 1;
            transition: visibility 0s, opacity 0.5s;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 600px) {
            form {
                height: auto;
            }

            button{
                width: 60%;
            }
        }

        label {
            color: white;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Create Form -->
    <form id="form">
        <!-- Details -->
        <div class="form-control">
        <form action="second.php" method="GET">
            <label for="leave-reason" id="label-name">Leave Reason</label>
            <!-- Dropdown options -->
            <select name="leave-reason" id="leave-reason" name="leave_reason">
                <option value="Leave Reason">Leave Reason</option>
                <option value="Medical Problem">Medical Problem</option>
                <option value="Personal Problem">Personal Problem</option>
            </select>
        </div>
        <div class="form-control">
            <label for="comment">Reason in detail</label>
            <textarea id="comment" name="comment" rows="4" style="resize: none;" name="Details" required></textarea>
        </div>
        <div class="form-control">
            <label for="section" id="label-section">Section</label>
            <!-- Dropdown options -->
            <select name="section" id="section" name="Section">
                <option value="Sections">Sections</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>
        <div class="form-control">
            <label for="tutor" id="label-tutor">Tutor</label>
            <!-- Dropdown options -->
            <select name="tutor" id="tutor" name="Tutor">
                <option value="Tutor">Tutor</option>
                <option value="Shefali Khandelwal/Dinesh Bhatia">Shefali Khandelwal/Dinesh Bhatia</option>
                <option value="Vivek Sharma">Vivek Sharma</option>
            </select>
        </div>
        <div class="container">
            <center>
                <span><i class="fa fa-cloud upload text-light fa-5x" aria-hidden="true"></i></span>
                <p class="text-light">Upload document</p>
                <input type="file" id="file" class="text-light" name="Documents">
            </center>
        </div>
        <input type="submit" class="sum" onclick="submitForm()" name="savedata" value="Submit" ></input>
        <!-- <input type="submit" class="btn" onclick="submitForm()" name="savedata" value="Submit"></input> -->
    </form>
    <?php
    if($_GET['savedata'])
        {
            $leave_reason = $_GET['leave_reason'];
            $Details = $_GET['Details'];
            $Section = $_GET['Section'];
            $Tutor = $_GET['TUTOR'];
            $Document = $_GET['Document'];

            $query2="INSERT INTO `leave_app` (`leave_reason`, `Details`, `Section`, `Tutor`, `Document`) 
            VALUES ('$leave_reason', '$Details', '$Section', '$Tutor', '$Document');";

            $data = mysqli_query($conn,$query2);
        
        }
        ?>

    <!-- Pop-up Dialog Box -->
    <div id="popup-dialog" class="popup">
        Submitted successfully
    </div>

    <script>
        function submitForm() {
            var reason = document.getElementById("comment").value;
            var section = document.getElementById("section").value;

            if (reason === "" || section === "Sections") {
                alert("Please fill in the required fields.");
                return;
            }

            showPopup();
        }

        function showPopup() {
            var popup = document.getElementById("popup-dialog");
            popup.classList.add("show");

            setTimeout(function () {
                popup.classList.remove("show");
            }, 3000); // Show for 3 seconds
        }
    </script>
</body>

</html>
