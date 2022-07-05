<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- first rename this file as "create.php" and put it on views directory -->
<html>
 <head>
 <title><?php echo $title; ?></title>
 </head>
 <body>
    <form action="<?php echo site_url('users/create');?>" method="post">
      <p><input type="text" name="username"/></p>
      <p><input type="text" name="email"/></p>
      <textarea name="about"></textarea>
      <p><input type="submit" name="submit" value="Create"/></p>
    </form>
 </body>
</html>