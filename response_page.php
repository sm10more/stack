<?php
include 'header.php';
include 'server_conn.php';
include 'userIdQuery.php';
$body = $_POST['answer'];
$tsql= "INSERT INTO Posts(Body, CreationDate, LastActivityDate, LastEditDate, OwnerUserId, ParentId, PostTypeId, Score, ViewCount)
VALUES('$body', getdate(), getdate(), getdate(), '$userId', '$postId', 2, 0, 0);";
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
  <?php include 'footer.php'; ?>
</body>
</html>