<?php
session_start();
include "style_login.php";
include('../private/config.php');

date_default_timezone_set('Asia/Manila');
$error = "";

// Initialize try session variable if not set
if (!isset($_SESSION['try'])) {
    $_SESSION['try'] = 0;
}

// Redirect if already logged in
if (isset($_SESSION['NotSup'])) {
    echo "<script>window.location.href='HomePage'</script>";
}

if (isset($_POST['usubmit'])) {
    $ucode = htmlspecialchars($_POST['ucode']);
    $upass = htmlspecialchars($_POST['upass']);
    $pass = md5($_POST['upass']);

    if (!empty($ucode) && !empty($upass)) {
        // Use prepared statements to avoid SQL injection
        $stmt = $con->prepare("SELECT * FROM ccs_login WHERE stunum = ? AND password = ?");
        $stmt->bind_param("ss", $ucode, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        $TR = $result->num_rows;

        if ($TR > 0) {
            $logdate = date("Y-m-d h:i:s");
            $R = $result->fetch_array();
            $Q2 = mysqli_query($con, "INSERT INTO logs (fname, mname, lname, action, timess) VALUES ('".$R['fname']."','".$R['mname']."','".$R['lname']."', 'Successfully Login', '$logdate')");

            if ($R['action'] == "User") {
                $_SESSION['NotSup'] = $R['fname'];
                echo "<script>alert('Welcome, {$R['fname']}. Redirecting to Home Page....')</script>";
                echo "<script>window.location.href='HomePage'</script>";
            }elseif ($R['action'] == "Admin") {
                $_SESSION['NotSup'] = $R['fname'];
                echo "<script>alert('Welcome, {$R['fname']}. Redirecting to Administrator Page....')</script>";
                echo "<script>window.location.href='AdminPage'</script>";
            }elseif ($R['action'] == "Inactive") {
                    echo "<script>alert('Sorry, {$R['fname']}. Your account is Inactive Right now....')</script>";
                    echo "<script>window.location.href='LoginHere.php'</script>";
                }
        } else {
            $_SESSION['try']++;
            $error = "- Username and/or Password incorrect!";

        }
        $stmt->close();
    }
    mysqli_close($con);
}
$messages= "Please Wait, If you are not Hacker!";
$remaining_time = 20; // Set initial time (20 seconds)
if ($_SESSION['try'] >= 3) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="images/ccs.png" alt="illustration" class="illustration" />
                <h2 class="opacity">LOGIN</h2>
                <form action="#" method="post">
                    <input type="text" name="ucode" placeholder="STUDENT NUMBER" required />
                    <input type="password" name="upass" placeholder="PASSWORD" required />
                    <button class="opacity" type="submit" name="usubmit" id="login-button" disabled>LOGIN</button>                
                    <a style="color: black; margin-left: 25%;" href="Forgot">Forgot password?</a>
                    <?php if ($error != "") { ?>
                        <p class="error"><?= $error ?></p>
                    <?php } ?>
                    <div class="countdown" id="countdown-timer"><?php  ?>
                      <?= floor($remaining_time / 60) . ":" . str_pad($remaining_time % 60, 2, "0", STR_PAD_LEFT); ?>
                 
                    </div>
                </form>
                <div class="register-forget opacity">
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
                <script>
                    let countdownTimer = document.getElementById('countdown-timer');
                    let loginButton = document.getElementById('login-button');
                    let timeRemaining = <?= $remaining_time; ?>;

                    function updateCountdown() {
                        let minutes = Math.floor(timeRemaining / 60);
                        let seconds = timeRemaining % 60;
                        countdownTimer.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
                        timeRemaining--;
                        if (timeRemaining >= 0) {
                            setTimeout(updateCountdown, 1000);
                        } else {
                            countdownTimer.textContent = 'You can try logging in now.';
                            loginButton.disabled = false;
                        }
                    }

                    updateCountdown();
                </script>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    // Show the normal login form if not locked out
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="images/ccs.png" alt="illustration" class="illustration" />
                <h2 class="opacity">LOGIN</h2>
                <form action="#" method="post">
                    <input type="text" name="ucode" placeholder="STUDENT NUMBER" required />
                    <input type="password" name="upass" placeholder="PASSWORD" required />
                    <button class="opacity" type="submit" name="usubmit">LOGIN</button>
                    <a style="color: black; margin-left: 25%;" href="Forgot">Forgot password?</a>
                    <?php if ($error != "") { ?>
                        <p class="error"><?= $error ?></p>
                    <?php } ?>
                </form>
                <div class="register-forget opacity">
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
    </html>
    <?php
}
?>