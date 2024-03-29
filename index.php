<?php
session_start();
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Video Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body id="pic">
<div class="container text-center" id="coverimg">
<div class="row" id="marg">
<div class="col-sm"></div>
<div class="col-sm" >
<form class="form-signin" method="post" action="loginProcess.php">
    <img class="mb-4" src="images\movie.svg" alt="" width="100px" height="100px">
    <h1 class="h3 mb-3 font-weight-normal" id="signin">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <?php

                // Password error message

                if (isset($_SESSION['wmessage'])): ?>
                <? require_once('connection.php'); ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">

                <?php

                echo $_SESSION['wmessage'];
                unset($_SESSION['wmessage']);
                ?>
                </div>
                <?php endif ?>

    <input class="btn btn-lg btn-warning btn-block" id="loginBtn" type="submit" value="Login">
    <a href="registrationForm.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="registerBtn">Sign up</a>
</form>
<span>
</span>
    </div>
<div class="col-sm"></div>
</div>
</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
