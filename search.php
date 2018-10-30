<?php require_once 'config.inc.php';?>
<?php
try {
  $query = $db -> query ( 'set names utf8' );

  $keywords = (isset($_POST['keywords'] )) ? $_POST['keywords'] : '';

if(!empty($keywords)){


  
    $search_query = $db -> prepare ( ' select  * from users where  (name like ? ) or ( email like ?  )  or 
    ( name like ? )  or (email like ? ) ' );
    $search_query -> bindValue( 1 , "%$keywords%" , PDO::PARAM_STR );
    $search_query -> bindValue( 2 , "%$keywords%" , PDO::PARAM_STR );
    $search_query -> bindValue( 3 , "%$keywords%" , PDO::PARAM_STR );
    $search_query -> bindValue( 4 , "%$keywords%" , PDO::PARAM_STR );
    
    $search_query -> execute();
    
    $affected_search_result = $search_query -> rowCount();

}
else
{
  $error1 = 'Unesite termin pretrage';
  
  
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
    <title>Search results</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="styleshet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" async defer></script>
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



         <?php
          try {
          
          if(!isset($_SESSION['logged'])){
            
            ?>
           

<div class="container">
<div class="col-md-12 ">

<h2>You must be logged to see search results</h2>
<h4><a href="login.php" class="btn btn-primary">Login</a>
</div>
</div>


                        
                        <?php
            
            
          }
          else
          {
            
            ?>
             




<div class="container">

<div class="col-md-12">
<h2>Search results</h2>
<br><br>
<table id="example" class="display table table-bordered" >
        <thead>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
<?php
if ( isset( $error1 )){


}
else
{

while ($row = $search_query -> fetch (PDO::FETCH_ASSOC)){
    $name  = $row['name'];  
    $user_id = $row['user_id']; 
    $email = $row['email']; 
 
    ?>
        <tr>
          <td><?php echo $user_id; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
                
            </tr>

      <?php
      
      
    }
}

?>

           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>

            </tr>
        </tfoot>
    </table>

</div>



</div>








                        <?php
            
            
          }
          
          
          }
          catch ( PDOException $exception ){
          echo $exception -> getMessage();
            
          }
          
          
          ?>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
<script>
  
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>



</body>
</html>