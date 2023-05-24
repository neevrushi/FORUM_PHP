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
<div class="container">
      <h2 class="text-center"style='font-size:50px;'>&#128512;<b>IDiscuss -Categories</b></h2>
<hr>
<div class="row">
    <?php 
 
    $sql ="SELECT * FROM `cat`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['cat_id'];
      $cat = $row['cat_name'];
      $desc =$row['cat_desc'];
       ECHO '<div class="col-md-4 my-2">
       <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="img/'.$id.'.jpg" alt="Card image cap">
       <div class="card-body ">
         <h5 class="card-title" style="color:MediumSeaGreen;" href="/thredlist.php?catid='.$id.'">'.$cat.'</h5>
         <p class="card-text">'.substr($desc,0,70).'...</p>
         <a href="thredlist.php?catid='.$id.'" class="btn btn-primary" >View More</a>
       </div>
     </div>
     </div>
     ';
    }

?>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>