<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>query_page</title>
  </head>
  <body>
  <?php
  include 'header.php';
include 'server_conn.php';
$tsql= "select Top 50 p.Id, p.Title, p.Body, p.CreationDate, u.DisplayName, p.Tags, p.Score, p.AnswerCount, p.ViewCount
from Posts p
join Users u on p.OwnerUserId = u.Id
where PostTypeId = 1
order by p.CreationDate;";
$getResults= sqlsrv_query($conn, $tsql);
echo "<div class=\"container\">
<div class=\"row\">
  <div class=\"col-1\">

  </div>
  <div class=\"col-10\">
  <div class=\"card text-center\">
  <div class=\"card-header\">
    <ul class=\"nav nav-tabs card-header-tabs\">
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"#\">Active</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
    </ul>
  </div>
  <div class=\"card-body\">
    <h2 class=\"card-title\">Top Questions</h2>
    <p class=\"card-text\">Find your answer</p>
    <a href=\"/askform.php\" class=\"btn btn-primary\">Ask Form</a>
  </div>
</div>";
  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    $body = strip_tags(substr($row['Body'], 0, 200));
    $card = "
    <div class=\"card\">
    <div class=\"card-body\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-2\">
            <p class=\"card text-center\"><strong>{$row['Score']}</strong></p>
            <p class=\"card text-center\"><small>votes</small></p>
            <p class=\"card text-center\"><strong>{$row['AnswerCount']}</strong></p>
            <p class=\"card text-center\"><small>answers</small></p>
            <p class=\"card text-center\"><small>{$row['ViewCount']}</small><small>views</small></p>
          </div>
          <div class=\"col\">
            <a href=\"/3columns.php?id={$row['Id']}\"class=\"card-link\"><h5 class=\"card-title\">{$row['Title']}</h5></a>
            <p class=\"card-text\">$body</p>
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <a href=\"#\"class=\"card-link\">{$row['Tags']}</a>
                </div>
                <div class=\"col\">
                  <p class=\"card text\"><small>asked {$row['CreationDate']->format('Y-m-d H:i:s')}</small></p>
                  <p<small><a href=\"#\"class=\"card-link\"> {$row['DisplayName']}</a></small></p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </div>
    </div>";
  echo $card;
  }
  ?>
    </div>
      <div class="col">
      <?php include 'postButton.php';?>
      </div>
    </div>
  </div>"
  <?php include 'footer.php'; ?>
</body>
</html>