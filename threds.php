<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php
    include 'part/nav.php';
    include 'part/db.php';
    include 'part/loginmodel.php';

    ?>
  <?php

   $id = $_GET['threadid'];
  $sql = "SELECT * FROM `thread` WHERE thread_cat_id  =$id";
  $res =  mysqli_query($conn,$sql)or trigger_error;

  while($row = mysqli_fetch_assoc($res)){
    
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
  

  }

?>

<div class="container">
      <h2 class="text-center"style='font-size:50px;'>&#128512;<b>IDiscuss -Categories</b></h2>
<hr>
<div class="row">
<div class="jumbotron">
  <h1 class="display-4">Hello, <?php  echo $title; ?>!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p><?php  echo $desc; ?>.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>
</div>
<?php

$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){

   ECHO  $textarea = $_POST['comment_title'];
    
    $sql = "INSERT INTO `comment` ( `comment_title`, `thread_id`, `comm_time`)
     VALUES ('$textarea','$id', current_timestamp())";
     $res = mysqli_query($conn,$sql);
 
   
     
}

?>

<hr>

<?php 
 $id = $_GET['threadid'];
 $sql ="SELECT * FROM `comment` WHERE comment_title";
$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($res)){
    $data = $row['comment_title'];
    // echo'fetch_code_deug_error';
    // $RES = data_ftch($sql,#ser);

}


?> 
<div class="container">
<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
  <div class="form-group">
  <label for="comment">Suggest Solution:</label>
      <textarea class="form-control" name ="comment_title"  id="comment_title"><?php echo datefmt_get_calendar_object?></textarea>
</div>
  <button type="submit" class="btn btn-primary">POST</button>

  <hr>
</form>
<p>
<div class="container">
      <h3 class="text-center"style='font-size:50px;'>
        ftp_connect($data)
    </h3>
      </div>
      
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>