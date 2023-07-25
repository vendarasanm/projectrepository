<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($this->session->flashdata('status')): ?>
    
        <?php  echo $this->session->flashdata('status') ?>
    
    <?php endif; ?>

    

</head>
<body>
    <h1>Add a employee data into Database
    <a href="<?php echo base_url('employee/add')?>">Add Employee</a></h1>
    <br><br>
    <table border="6" style="padding:5px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($employee)) : ?>
                <?php foreach($employee as $row): ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->mobile; ?></td>
                        <td><a href="<?php echo base_url('employee/edit/'.$row->id)?>" style="background-color:green;">Edit</a></td>
                        <td><a href="<?php echo base_url('employee/delete/'.$row->id)?>" style="background-color:red;">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
