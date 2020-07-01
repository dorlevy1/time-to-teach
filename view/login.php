<?php
session_start();
require_once '../Model/User.php';

$user =new User();


if(isset($_POST['submit'])){
    $user->loginUser();
}
?>
<?php include_once 'includes/head.php'?>
<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
<?php include_once 'includes/end_head.php'?>
    <div class="row">
        <div class="flex-row">
            <div class="half-size meet-side">
                <div class="form">
                    <div class="form-wrapper">
    
                        <h1>Please Log in your <br> Account</h1>
                        <form action="" method="POST">
                            <div class="input">
                                <input type="email" class="field" placeholder="Please enter your E-Mail"
                                    name="email"><br>
                                <input type="password" class="field" placeholder="Please enter your Password"
                                    name="password"><br>
                                <input type="submit" class="btn" value="send" name="submit">
                            </div>
                            <p><a href="">Forgot your password?</a></p>
                        </form>
                    </div>
                    <div class="recommend-signup">

                        <p>Don't have user?</p>
                        <p class="mrb20">Click below to sign up now!</p>
                        <a href="ssss" class="btn pdg1050">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="half-size form-side">
            <div class="bgc"></div>

            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php'?>
