<html>
 <head>
  <title><?php echo $title; ?></title>
 </head>
 <body>
    <?php foreach($users as $user):?>
       <h2>Name : <?php echo $user['username'];?></h2>
       <p>Email : <?php echo $user['email']; ?></p>
       <p>Details : <?php echo $user['about']; ?></p>
    <?php endforeach;?>
 </body>
</html>