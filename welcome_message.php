<?php
session_start();
include('./db_connect.php');
ob_start();
// if(!isset($_SESSION['system'])){

$system = $conn->query("SELECT * FROM system_settings")->fetch_array();
foreach ($system as $k => $v) {
    $_SESSION['system'][$k] = $v;
}
// }
ob_end_flush();
?>
<?php
if (isset($_SESSION['login_id']))
    header("location:index.php?page=home");

?>
<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            /* Set the background color with opacity */
            background-image: rgba(255, 255, 255, 0.5);

            /* Set background image properties as needed */
            background-repeat: no-repeat;
            background-size: cover;
            /* Additional properties if desired */
        }
    </style>
</head>

<body class="hold-transition login-page" style="background-image: url('assets/img/background-image.jpg'); ">

    <img src="assets/img/logo.png" alt="ccsjdm logo" width="100px" height="100px" style="margin-top:100px">
    <br>
    <h2>Welcome to Faculty Evaluation System!</h2>
    City College of San Jose Del Monte Bulacan
    <br>
    <div style="margin:30px 210px 10px 210px;">
        <p>Before you begin evaluating your teachers, please keep the following in mind:<br>
        </p>

        <p>
            <b> Be Honest and Constructive:</b> Provide genuine feedback that helps us improve the learning experience.Focus on teaching, communication, support, and other relevant aspects.<br>

            <b> Data Collection by Administrators:</b> Please note that administrators will collect and analyze the evaluation data to support faculty development and enhance academic programs. The data collected may include your name (for identification purposes), comments, suggestions, and ratings.<br>

            <b>Show Professionalism and Respect:</b> Express your opinions respectfully, without personal attacks or inappropriate language.<br>

            <b>Use the System Responsibly:</b> Uphold the system's integrity and avoid fraudulent activities.<br>

            <b>Submit on Time:</b> Complete your evaluations within the specified deadline.<br>
        </p>
        <p>
            Thank you for your valuable input and contribution to our academic community!
        </p>

    </div>






    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault()
                start_load()
                if ($(this).find('.alert-danger').length > 0)
                    $(this).find('.alert-danger').remove();
                $.ajax({
                    url: 'ajax.php?action=login',
                    method: 'POST',
                    data: $(this).serialize(),
                    error: err => {
                        console.log(err)
                        end_load();

                    },
                    success: function(resp) {
                        if (resp == 1) {
                            location.href = 'index.php?page=home';
                        } else {
                            $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
                            end_load();
                        }
                    }
                })
            })
        })
    </script>
    <?php include 'footer.php' ?>

</body>

</html>