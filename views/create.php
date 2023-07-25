
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1>Create new employee data
<a href="<?php echo base_url('employee')?>">back</a><br></h1>


<form action="<?php echo base_url('employee/store') ?>" method="POST">
        Username: <input type="text" name="username"><br />
       <small><?php echo form_error('username'); ?></small>
        Password: <input type="password" name="password"><br />
        <small><?php echo form_error('password'); ?></small>
        Email:    <input type="email" name="email"><br />
        <small><?php echo form_error('email'); ?></small>
        Mobile:   <input type="mobile" name="mobile"><br />
        <small><?php echo form_error('mobile'); ?></small>
        <input type="submit" value="Submit" name="submit" />
    </form>

</body>
</html>

