<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php echo $this->session->flashdata('status');?>
</head>
<body>
<center>
<h1>Login Page</h1>



<form action="<?php echo base_url('save') ?>" method="POST">
        Email : <input type="email" name="email" required=""><br><br>
       
        Password: <input type="password" name="password" required=""><br><br>
        
       
       
        <input type="submit" value="Submit" name="submit" />
    </form>
</center>
</body>
</html>
