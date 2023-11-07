<!DOCTYPE html>
<?php
if($_POST['name'] == "2" && $_POST['password'] == "2"){
  echo "<script>window.location.href='index.php';</script>";
  exit;
  echo"1";
}else{
  echo "Şifre yada mail yanlış";
}
?>

<html>
<head>
<title>Siena Turizm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
  <link href="/sienaTurizm/Style/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' href='/sienaTurizm/Style/style.css'>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
<!-- fav-icons-->
<link rel="apple-touch-icon" sizes="180x180" href="/sienaTurizm/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/sienaTurizm/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/sienaTurizm/images/favicon-16x16.png">
<link rel="manifest" href="/sienaTurizm/site.webmanifest">
<link rel="mask-icon" href="/sienaTurizm/images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>

<body>
  <div class="loginAdmin">
<!-- <div class="col-md-6">   -->
<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="name" class="form-control"placeholder="Mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Şifre</label>
    <input type="password" name="password"class="form-control" placeholder="Şifre">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- </div> -->
</div>
</body>

</html>