<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-10">
    <div id="ask" class="container">
    <h2 id="so">Ask a public question </h2>
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
    <button id="myAnchor" onclick="sendForm(event)" class="btn btn-primary"><small>Review your question</small></button>
  </form>
</div>
    </div>
    <div class="col">
        
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <script>
   function sendForm(event){
    event.preventDefault();
   let para = document.createElement('h1');
    let node = document.createTextNode('Tata are mere');
    para.appendChild(node);
    let element = document.getElementById("ask");
    let child = document.getElementById("so");
    element.insertBefore(para, child);
  }
    </script>
</body>

</html>
