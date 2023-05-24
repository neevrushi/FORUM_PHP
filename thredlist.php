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
     $id = $_GET['catid'];
     $sql = "SELECT * FROM `cat` WHERE cat_id=$id";
     $res = mysqli_query($conn,$sql)or trigger_error;
     while($row =  mysqli_fetch_assoc($res)){
         $name = $row['cat_name'];
         $dec = $row['cat_desc'];
         
     }
    ?>
    
<?php

$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    $title =$_POST['title'];
    $textarea = $_POST['desc'];

    $sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `date`)
    VALUES ( '$title', '$textarea', '$id', '0', current_timestamp())";
    $res = mysqli_query($conn,$sql);

    $Showalert = true;
    if($Showalert){
      echo'
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are Threads has been added! Please Wait Community to respod.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ';
    }


}
?>
<div class="container">
      <h2 class="text-center"style='font-size:50px;'>&#128512;<b>IDiscuss -Categories</b></h2>
<hr>
<div class="row">
<div class="jumbotron">
  <h1 class="display-4">Hello, <?php  echo $name; ?>!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p><?php  echo $dec; ?>.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>



<h4 class="text-bold" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>   Start Ask Question</h4>
<hr>

  <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
  <div class="form-group">
    <label for="text">Problam Title </label>
    <input type="text" class="form-control" name ="title"id="text" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <label for="comment">Ellaborx ate Your Concern:</label>
  <textarea class="form-control" name ="desc" rows="5" id="comment"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<h4 class="text-bold" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg> Browse Questionss</h4>

<hr style="">
<?php
$id = $_GET['catid'];
$sql = "SELECT * FROM `thread` WHERE thread_cat_id =$id";
$res = mysqli_query($conn,$sql);
// $noresult = true;
while($row = mysqli_fetch_assoc($res)){

  // $noresult = false;
  
  $title = $row['thread_title'];
  $desc = $row['thread_desc'];

  

  echo'
  <div class="container">
  <div class="media my-3">
  <img class="mr-3" src="img/user.png" width ="40px"alt="e">
  <div class="media-body">
    <h5 class="mt-0"  > <a class="text-dark" href="threds.php?threadid='.$id.'">'.$title.'</a></h5>
  
   <p>'.$desc.'</p>
   <hr style="">
  </div>
</div>
</div>';

echo '';


}


?>
</div>
</div>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>