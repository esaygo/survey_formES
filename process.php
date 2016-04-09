
<?php session_start();

if(!isset($_SESSION['rand'])) {
    $_SESSION['rand']= rand(1,100);
    $_SESSION['counter'] = 0;
}

if($_SESSION['counter'] < 4) {

    if($_POST['guess'] > $_SESSION['rand']) {
      $_SESSION['result'] = 'high';
      $_SESSION['counter']++;
    } else if($_POST['guess'] < $_SESSION['rand']) {
      $_SESSION['result'] = 'low';
      $_SESSION['counter']++;
    } else {
      $_SESSION['result'] = 'correct';
    }
} else {
  $_SESSION['result'] = 'no_guesses_left';

}

header('Location: index.php');
exit();

?>
