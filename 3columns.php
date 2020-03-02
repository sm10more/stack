<?php include 'header.php'; ?>
  <div class="container">
     <div class="row">
         <div class="col">
         
         </div>
         <div class="col-10">
            <?php
            include 'server_conn.php';
            parse_str($_SERVER['QUERY_STRING']);
            $asql = "select Title, Body, CreationDate, Score, Tags, ViewCount, AnswerCount
            from Posts
            where Id=$id;";
            $getResults = sqlsrv_query($conn, $asql);
            $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC);
            ?>
            <div class="card text-center">
              <div class="card-body">
                 <h5 class="card-title"><?php echo $row['Title'];?></h5>
              </div>
              <div class="card-footer text-muted">
                <div class="container">
                  <div class="row">
                     <div class="col">
                         <p<small>asked <?php echo $row['CreationDate']->format('Y-m-d H:i:s');?></small></p>
                     </div>
                     <div class="col">
                         <p<small>viewed <?php echo $row['ViewCount'];?></small></p>
                     </div>
                  </div>
                 </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-2">
            <div class="card">
              <div class="card-body">
                <p class="card-text"><?php echo $row['Score'];?></p>
                <a href="#" class="btn btn-secondary">Some</a>
              </div>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="card">
              <div class="card-body">
                <p class="card-text"><?php echo $row['Body'];?></p>
                <a href="#" class="btn btn-blank"><small><?php echo $row['Tags'];?></small></a>
                <p class="card-text"><big><?php echo $row['AnswerCount'];?> Answers</big></p>
              </div>
            </div>
          </div>
        </div>
        <?php
            $tsql= "select p.Id, p.Body, p.CreationDate, p.ViewCount, p.Score, p.CommentCount
            from Posts p
            where p.ParentId = $id;";
            $getAnswers = sqlsrv_query($conn, $tsql);
            while ($answer = sqlsrv_fetch_array($getAnswers, SQLSRV_FETCH_ASSOC)) {
                $body = strip_tags($answer['Body']);
                $ansId = $answer['Id'];
            ?>
            <div class="row">
              <div class="col-sm-2">
                <div class="card">
                  <div class="card-body">
                    <p class="card-text"><big><?php echo $answer['Score'];?></big></p>
                    <a href="#" class="btn btn-secondary">Some</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-10">
                <div class="card">
                  <div class="card-body">
                    <p class="card-text"><?php echo $body;?></p>
                    <p class="card-text"><pre><small>asked <?php echo $answer['CreationDate']->format('Y-m-d H:i:s')?>         Id <?php echo $ansId;?>   comments <?php echo $answer['CommentCount'];?></small></pre></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <div class="card">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-sm-10">
                <div class="card">
                  <div class="card-body">
                  <?php
                    $bsql = "SELECT Text, CreationDate, PostId
                    from Comments
                    WHERE PostId = $ansId;";
                    $getComments = sqlsrv_query($conn, $bsql);
                    while ($comment = sqlsrv_fetch_array($getComments, SQLSRV_FETCH_ASSOC)) {
                    $comm = "
                    <p class=\"card-text\"><small>{$comment['Text']} {$comment['CreationDate']->format('Y-m-d H:i:s')}</small></p>";
                    echo $comm;
                    }
                    ?>
                    <button type="button" onclick="document.getElementById('commentform').style.display='block'"><small>add a comment</small></button>
                  <div class="container">
                    <form id="commentform" style="display:none" action="/comment_page.php?answerId=<?php echo $ansId ?>" method="post">
                      <div class="form-group">
                        <label for="name"><small>Name:</small></label>
                        <input type="username" class="form-control" id="name" placeholder="e.g. John Doe" name="name">
                      </div>
                      <div class="form-group">
                        <label for="comment"><small>add a comment</small> </label>
                        <input type="comm" class="form-control" id="comment" placeholder="" name="comment">
                      </div>
                        <button type="submit" class="btn btn-primary"><small>Post your comment</small></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <div class="container">
            <form action="/response_page.php?postId=<?php echo $id ?>" method="post">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="username" class="form-control" id="name" placeholder="e.g. John Doe" name="name">
              </div>
              <div class="form-group">
                <label for="answer"><big>Add your answer</big> </label>
                <input type="answ" class="form-control" id="answer" placeholder="" name="answer">
              </div>
              <button type="submit" class="btn btn-primary"><small>Post your answer</small></button>
            </form>
          </div>
            
        </div>
         <div class="col">
         <?php include 'postButton.php';?>
         </div>
     </div>
   </div>
   <?php include 'footer.php'; ?>
   </body>
</html> 