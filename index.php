<?php include 'database.php' ?>
<?php
// create select Query
$query= "SELECT * FROM shouts ORDER BY id DESC";
$shouts= mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>SHOUTit</title>
  </head>

  <body>
    <div id="container">
      <header>
            <h1>shoutit box</h1>
      </header>
      <div id="shouts">
        <ul>
           <?php while ($row= mysqli_fetch_assoc($shouts)) : ?>
             <li class="shout"> <span><?php echo $row['time'] ?></span>- <strong><?php echo $row['user'] ?></strong> : <?php echo $row['message'] ?></li>
          <?php endwhile; ?>

        </ul>
        </div>
      <div id="input">
        <?php if(isset($_GET['error'])) : ?>
<div class="error"><?php echo $_GET['error']; ?></div>
        <?php endif; ?>
        <form action="process.php" method="post">
          <input type="text" name="user" placeholder="enter your name" />
          <input type="text" name="message" placeholder="enter your message" />
            <br>
          <input class="shout-btn"type="submit" name="submit" value="shout it out" />
        </form>

      </div>


      </div>
  </body>
</html>
