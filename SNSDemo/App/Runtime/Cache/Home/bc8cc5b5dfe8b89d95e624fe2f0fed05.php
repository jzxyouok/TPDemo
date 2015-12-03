<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/login_regist.css">
    <script type="text/javascript" src="/Public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src='/Public/js/bootstrap.min.js'></script>
</head>
<body>
<div class="container">
    <form method="POST" class="form-signin">
        <h2 class="form-signin-heading">Please Regist</h2>
        <input type="hidden" name="user_id">
        <input type="text" name="user_email" placeholder="email" class="input-block-level"><br>
        <input type="password" name="user_password" placeholder='password' class="input-block-level"><br>
        <input type="password" name="repassword" placeholder='confirm password' class="input-block-level"><br>
        <button class="btn btn-large btn-primary" type="submit">Regist</button>
    </form>
</div>
</body>
</html>