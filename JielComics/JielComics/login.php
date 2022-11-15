<!DOCTYPE html>
<html id="input" class="login">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="assets/fa/css/all.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<title>Login</title>
</head>
<body>
<div class="add-container container text bg-dark mt-5" style="width: 700px;">
  <h1 class="text-center pt-3">LOGIN</h1>
  <hr>
  <form id="form1" method="post" action="process.php"  autocomplete="off">
    <br>
    <label>Username</label><br>
    <input type="text" name="username" class="mb-4" placeholder="Username..." value="<?php if(isset($_GET['user'])){ echo $_GET['user'];
            } ?>" autofocus="" required="">
    <br>
    <label>Password</label><br>
    <input type="Password" name="password" class="mb-4" placeholder="Password..." required=""><br>
    <span>Dont have an account? <a href="register.php">Sign Up</a><span><br><br>
    <input class="addcontent" id="btn-submit" type="submit" name='submit' value="LOGIN">
  </form>
  <button class="back" onclick="window.location.href='index.php'" style="width:100%; position: relative; left:-5px;">BACK</button>
  <br><br>
</div>
<?php   
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username or Password is incorrect !</div>";
    }
  }
 ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
</body>
</html>