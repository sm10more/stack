<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>action_page</title>
  </head>
  <body>
  <?php
include 'server_conn.php';
include 'header.php';
include 'userIdQuery.php';
$answer = $_POST['answer'];
$tsql= "INSERT INTO Posts(Body, CreationDate, LastActivityDate, LastEditDate, OwnerUserId, ParentId, PostTypeId, Score, ViewCount)
VALUES('$answer', getdate(), getdate(), getdate(), '$userId', '$postId', 2, 0, 0);";
include 'published.php';
?>

<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col-8">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($name)) {
            ?><h3>Name is empty</h3><?php
        }   
        if (empty($answer)) {
            ?><h3>Answer is empty</h3><?php
        }
        else{ ?>
    <h3><?php echo $name ?>, your answer was <?php echo $response ?> </h3>
    <?php
        } 
    }?>
      
    </div>
    <div class="col-3">
    <div class="card-body">
           <a href="/askform.php" class="btn btn-primary">Ask a question</a>
         </div>
    </div>
  </div>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>