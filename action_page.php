<?php
include 'header.php';
include 'server_conn.php';
include 'userIdQuery.php';
$body = $_POST['body'];
$tags = $_POST['tg'];
$title = $_POST['title'];
$tsql= "INSERT INTO Posts(Body, CreationDate, LastActivityDate, LastEditDate, OwnerUserId, PostTypeId, Score, Tags, Title, ViewCount)
VALUES('$body', getdate(), getdate(), getdate(), '$userId', 1, 0, '$tags', '$title', 0);";
include 'published.php';
?>
<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col-8">
    <?php
    include 'unfilled.php';
    if (empty($title)) {
      echo "<h3>Title is empty</h3>";
    }
    ?>
      
    </div>
    <div class="col-3">
    <?php include 'postButton.php';?>
    </div>
  </div>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>