<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>untitled</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css?t=<?php echo strtotime('now'); ?>" media="screen" 
    charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid.css?t=<?php echo strtotime('now'); ?>" media="screen" 
    charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css?t=<?php echo strtotime('now'); ?>" media="screen" 
    charset="utf-8">
</head>
<body>
<div id="login_form">
    <h1>Login, foo!</h1>
        <?php echo form_open('accessatyourownrisk/login/validate_credentials'); ?> 
        <label for="username">Username:</label> <?php
        echo form_input('username', '');
        ?> <label for="password">Password:</label> <?php
        echo form_password('password', '');
        echo form_submit('submit', 'Login');?>
        <label for="submit" id="login-message"><?php echo $this->session->flashdata('message');?></label>
</div>
</body>
</html>