<?php require_once 'config.inc.php';


try {
  
if(isset($_SESSION['logged'])){
  header('Location:index.php');
die();  
}

  
}
catch ( PDOException $exception ){
echo $exception -> getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User registration</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">

  		<br><br><br><br>

  </div>
  	 <div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
            <?php
          try {
          
          if(!isset($_SESSION['logged'])){
            
            ?>
             <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            

                        
                        <?php
            
            
          }
          else
          {
            
            ?>
                <ul class="nav navbar-nav navbar-right">
          
          <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome , <?php echo $_SESSION['name']; ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>

</ul>
</li>
</ul>
                        <?php
            
            
          }
          
          
          }
          catch ( PDOException $exception ){
          echo $exception -> getMessage();
            
          }
          
          
          ?>
         </ul>
        </li>
      </ul>


      <form class="navbar-form navbar-right"  method="post" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" name="keywords" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>


<div class="container">
<div class="col-md-6 col-md-offset-3">



  <div class="row">

    <div class="main">

      <h3>Please Log In, or <a href="register.php">Sign Up</a></h3>


<?php
try {
if(isset($_POST['submit'])){

$name = (isset($_POST['name'])) ? htmlspecialchars(trim($_POST['name'])) : '';
$password = (isset($_POST['password'])) ? htmlspecialchars(trim($_POST['password'])) : '';
$repeat_password = (isset($_POST['repeat_password'])) ? htmlspecialchars(trim($_POST['repeat_password'])) : '';
$email = (isset($_POST['email'])) ? htmlspecialchars($_POST['email']) : '';

$errors = null;
if(empty($name)){
$errors[] = 'Name can not be empty.'; 
}



if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Invalid email address"; 
}

if(empty($password)){
$errors[] = 'Password can not be empty.';  
}
if(empty($repeat_password)){
$errors[] = 'Please , repeat your password.';  
}
if($password != $repeat_password ){
$errors[] ='Please , repeat your password correctly.'; 
}


if( strlen($password ) <  5 ){
  
$errors[] = 'Your password can not be less than 5 characters.'; 
}
if(!preg_match('/[A-Z0-9]/', $password)){
$errors[] = 'Your password must include numbers and big letters.'; 
}
if(empty($email)){
$errors[] = 'Email address can not be empty.'; 
}




$sql = 'select email from users where email = :email ';
$query = $db -> prepare (  $sql );
$query -> execute ( array( ':email' => $email ));
if($rows = $query -> rowCount() > 0 ){
$errors[] = 'Email address <strong>'.$email.'</strong> is already used.';  
}

if( $errors && count($errors ) > 0 ){
  
?>
<ul style="padding:15px 16px; margin:20px auto; list-style:none; display:block; background-color:#FFF color:red; border:1px solid #CCC;">
<li><h4>An error occurred while registering.</h4></li>
<li>&nbsp;</li>
<?php
foreach ($errors as $error ){
?>  
  <li><?php echo $error;?></li>
<?php 
}
?>
</ul>
<?php 
  
}
else
{




  $options = [
  'cost' => 12 
  ];
  $hashed_password = password_hash( $password , PASSWORD_DEFAULT , $options );
  
  
$sql = '

insert into users ( user_id , name , password , email  ) values (
null , :name , :password , :email   )
';
$query = $db -> prepare ( $sql );
$query -> execute( array  (
  
 ':name' =>  $name, 
 ':password' =>  $hashed_password, 
 ':email' =>  $email

 
 ));


  //header('Location:index.php');
  echo '<p style="padding:7px 0px;">Hvala vam <strong>'.$name.'</strong> što ste se registrovali na našem sajtu.</p>';




}
}// kraj main isseta

}
catch ( PDOException $exception ){
echo $exception -> getMessage();
  
  die();
}
?>









  

      <form role="form" method="post" action="register.php">
        <div class="form-group">
          <label for="inputUsernameEmail">Email address</label>
          <input type="text" class="form-control" name="email" id="inputUsernameEmail">
        </div>      
        <div class="form-group">
          <label for="inputUsernameEmail">Name</label>
          <input type="text" class="form-control" name="name" id="inputUsernameEmail">
        </div>
        <div class="form-group">
          
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword">
        </div>      
          <div class="form-group">
          
          <label for="inputPassword">Repeat password</label>
          <input type="password" class="form-control" name="repeat_password" id="inputPassword">
        </div>
        
        <button type="submit" name="submit" class="btn btn btn-primary">
          Log In
        </button>
      </form>
    
    </div>
    
  </div>

</div>
</div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  </body>
</html>