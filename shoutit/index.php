<?php 
  include_once('./database.php');
  //Create select query
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con,$query);
?>


<!DOCTYPE html> 
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHOUT IT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                     <li class="shout"><span><?php echo $row['time'] ?>- </span><?php echo $row['user'] ?>: <?php echo $row['message'] ?></li>  
                <?php endwhile ?>
                 </ul>
            </div>
            <div id="input">
            <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>
                <form action="process.php" method="post">
                    <input type="text" name="user"  placeholder="Enter your Name">
                    <input type="text" name="message" placeholder="Enter your message">
                    </br>
                    <input type="submit" name="submit" class="shout-btn"  value="Shout it out"/>
                </form>
            </div>
        </div>
            
    </body>
</html>