<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


	<title></title>
<style type="text/css">
.img-sunrise{
  font-size: 3rem;
  position: relative;
  top: 0;
  left: 0;
  color: orange;
  z-index: 1;
}
.blue{
	background: rgba(0, 0, 0, 0.3);
	padding: 20px;
}
	.margin-0-auto{
		margin: 0 auto;
	}
	.centered{
		text-align: center;
	}
.block-weather {
    height: auto;
    padding: 10px;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.1);
    box-shadow: 1px 0px 1px;
    margin-bottom: 20px;
  }
  
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Погода</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Главная</a></li>
      <?php
       if(isset($_SESSION['username'])){?>
      <li><a href="/weather/">Погода</a></li>
      <?}?>
      <li><a href="/feedback/">Обратная связь</a></li>
      <?php
      if(isset($_SESSION['username'])){?>
      <li><a href="#">Имя: <?=$_SESSION['username'];?></a></li>
      <?}?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      if(isset($_SESSION['username'])){?>
      <li><a href="/logout/"><span class="glyphicon glyphicon-log-out"></span> Выйти</a></li>
      <?}else{?>
<li><a href="/register_now/"><span class="glyphicon glyphicon-user"></span> Зарегистрироватся</a></li>
<li><a href="/login/"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
    <?}?>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">	
<?php
	include ($contentPage);
?>
</div>
</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> Trololo</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>