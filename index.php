<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Game</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
  <div id="wrapper">
    <h1>Welcome to the Great Number Game!</h1>
    <p>I am thinking of a name between 1 and 100</p>
    <p>Take a guess! You get five tries</p>
    <?php if(isset($_SESSION['result'])) { ?>
        <div class= <?php echo $_SESSION['result'] ?> >
          <!-- future colored box -->
        <p> Your guess is: <?php echo $_SESSION['result'] ?>.</p>
        <?php if($_SESSION['result'] == 'correct' || $_SESSION['counter'] == 4) { ?>
            <button id="reset"><a href="session_destroy.php">Play Again</a></button>
            <?php } ?>
        </div>
    <?php } ?>
    <!-- end of isset -->
    <form action='process.php' method='POST'>
        <input type='text' name='guess'>
        <input type='submit' value='Submit' class="submit_btn" id="start">
    </form>

</div>
</body>
</html>
