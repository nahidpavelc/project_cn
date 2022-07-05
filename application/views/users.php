<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- first rename this file as "users.php" and put it on views directory -->
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <a href="<?php echo site_url('users/create'); ?>">Create</a>
        <?php foreach ($users as $user): ?>
            <div style="border: 1px solid;width:200px;padding: 0 0 0 5px;">
                <p>Name : <?php echo $user['username']; ?></p>
                <p>Email : <?php echo $user['email']; ?></p>
                <p>Details : <?php echo $user['about']; ?></p>
                <p>
                    <a href="<?php echo site_url('users/edit') . '/' . $user['id']; ?>">Edit</a> 
                    <a href="<?php echo site_url('users/delete_user') . '/' . $user['id']; ?>">Delete</a> 
                </p>
            </div>
        <?php endforeach; ?>
    </body>
</html>