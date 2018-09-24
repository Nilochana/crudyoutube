<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center">Display table data</h1>
<br>
<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">

<th>id</th>
<th>username</th>
<th>password</th>
<th>delete</th>
<th>update</th>

</tr>


<?php

include'conn.php';


    $q="select * from crudtable";

     $query=mysqli_query($con,$q);
     
     while($res=mysqli_fetch_array($query)){

     

?>



<tr class="text-center">

<td><?php echo $res['id']; ?></td>
<td><?php echo $res['username']; ?></td>
<td><?php echo $res['password']; ?></td>
<td><button class="btn-danger btn"><a href="
delete.php?id=<?php echo $res['id']; ?>" class="text-white">delete</a></button></td>
<td><button class="btn-primary btn"><a href="
update.php?id=<?php echo $res['id']; ?>" class="text-white">update</a></button></td>

</tr>


<?php
     }
    ?>


</table>


</div>
</div>




</body>
</html>