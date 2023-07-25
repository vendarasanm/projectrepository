
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
</head>
<body>
    <center>
<h1>Signup Page</h1>



<form action="<?php echo base_url('submit') ?>" method="POST">
        Email : <input type="email" name="email"><br>
        <small><?php echo form_error('email'); ?></small>
        Password: <input type="password" name="password"><br>
        <small><?php echo form_error('password'); ?></small>
       
       
        <input type="submit" value="Submit" name="submit" />
    </form>
</center>

</body>
</html>

