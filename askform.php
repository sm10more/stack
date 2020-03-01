<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ask Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-10">
    <div class="container">
  <h2>Ask a public question </h2>
  <form action="/action_page.php" method="post">
    <div class="form-group">
      <label for="title">Title: <br> <small>Be specific and imagine you’re asking a question to another person</small></label>
      <input type="title" class="form-control" id="title" placeholder="e.g. Is there an R function for finding an index of an element in a vector ?" name="title">
    </div>
    <div class="form-group">
      <label for="body">Body:</label>
      <input type="askbody" class="form-control" id="body" placeholder="" name="body">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="username" class="form-control" id="name" placeholder="e.g. John Doe" name="name">
    </div>
    <div class="form-group">
      <label for="tg">Tags: <br> <small>Add up to 5 tags to describe what your question is about</small></label>
      <input type="tags" class="form-control" id="tg" placeholder="e.g (Objective-C swift windows)" name="tg">
    </div>
    <button type="submit" class="btn btn-primary"><small>Review your question</small></button>
  </form>
</div>
    </div>
    <div class="col">
        
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>
