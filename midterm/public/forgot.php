<?php
    include "style_login.php"; 
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Forgot</title>
        </head>
    <body>
        <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="images/ccs.png" alt="illustration" class="illustration"/><br><br><br>
                <h3 class="opacity">FORGOT PASSWORD</h3>
                <form action="#" method="post">
                    <input type="text" name="ucode" placeholder="STUDENT NUMBER" required />
                    <input type="email" name="email" placeholder="EMAIL" required />
                    <button class="opacity" type="submit" name="usubmit" id="login-button" disabled>SUBMIT</button>                
                </form>
                <div class="register-forget opacity">
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>
</html>