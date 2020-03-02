<?php
include 'header.php';
include 'server_conn.php';
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