<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>add_comment</title>
  </head>
  <body>
  <?php
include 'server_conn.php';
include 'header.php';
include 'userIdQuery.php';
$body = $_POST['comment'];
$tsql= "INSERT INTO Comments(CreationDate, Text, PostId, UserId)
VALUES(getdate(), '$body', '$answerId', '$userId');";
include 'published.php';
?>

<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col-8">
    <?php include 'unfilled.php';?>
    </div>
    <div class="col-3">
    <?php include 'postButton.php';?>
    </div>
  </div>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>