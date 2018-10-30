<?php require_once 'config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home page</title>

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




<h1>Tubulo putas dicere?</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="http://loripsum.net/" target="_blank">Negat esse eam, inquit, propter se expetendam.</a> Cur igitur, inquam, res tam dissimiles eodem nomine appellas? Sed quid attinet de rebus tam apertis plura requirere? <code>Easdemne res?</code> Duo Reges: constructio interrete. Non quaeritur autem quid naturae tuae consentaneum sit, sed quid disciplinae. Qua tu etiam inprudens utebare non numquam. Quod si ita sit, cur opera philosophiae sit danda nescio. Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. <i>Moriatur, inquit.</i> </p>

<h3>Beatus autem esse in maximarum rerum timore nemo potest.</h3>

<p>Quamquam haec quidem praeposita recte et reiecta dicere licebit. Quodsi ipsam honestatem undique pertectam atque absolutam. Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. Nam Pyrrho, Aristo, Erillus iam diu abiecti. At negat Epicurus-hoc enim vestrum lumen estquemquam, qui honeste non vivat, iucunde posse vivere. Odium autem et invidiam facile vitabis. </p>

<h2>Ab hoc autem quaedam non melius quam veteres, quaedam omnino relicta.</h2>

<p>Quid est igitur, cur ita semper deum appellet Epicurus beatum et aeternum? Maximus dolor, inquit, brevis est. Sed eum qui audiebant, quoad poterant, defendebant sententiam suam. <i>[redacted]</i>tilio Rufo, cum is rem ad amicos ita deferret, se esse heredem Q. Sed in rebus apertissimis nimium longi sumus. Quid sequatur, quid repugnet, vident. <a href="http://loripsum.net/" target="_blank">Graece donan, Latine voluptatem vocant.</a> Quis est, qui non oderit libidinosam, protervam adolescentiam? </p>

<p><i>Quid ait Aristoteles reliquique Platonis alumni?</i> <a href="http://loripsum.net/" target="_blank">Tum mihi Piso: Quid ergo?</a> Tenesne igitur, inquam, Hieronymus Rhodius quid dicat esse summum bonum, quo putet omnia referri oportere? <a href="http://loripsum.net/" target="_blank">Apud ceteros autem philosophos, qui quaesivit aliquid, tacet;</a> Idem etiam dolorem saepe perpetiuntur, ne, si id non faciant, incidant in maiorem. <mark>Cur deinde Metrodori liberos commendas?</mark> Me igitur ipsum ames oportet, non mea, si veri amici futuri sumus. Sed quot homines, tot sententiae; Quid ei reliquisti, nisi te, quoquo modo loqueretur, intellegere, quid diceret? <b>Ergo ita: non posse honeste vivi, nisi honeste vivatur?</b> <a href="http://loripsum.net/" target="_blank">Cum audissem Antiochum, Brute, ut solebam, cum M.</a> <i>Haeret in salebra.</i> </p>

<pre>Quae quidem res efficit, ne necesse sit isdem de rebus
semper quasi dictata decantare neque a commentariolis suis
discedere.

Sed quia studebat laudi et dignitati, multum in virtute
processerat.
</pre>


<blockquote cite="http://loripsum.net">
  Ut, inquit, in fidibus pluribus, nisi nulla earum non ita contenta nervis sit, ut concentum servare possit, omnes aeque incontentae sint, sic peccata, quia discrepant, aeque discrepant;
</blockquote>


<dl>
  <dt><dfn>Avaritiamne minuis?</dfn></dt>
  <dd>Potius inflammat, ut coercendi magis quam dedocendi esse videantur.</dd>
  <dt><dfn>Eam stabilem appellas.</dfn></dt>
  <dd>At modo dixeras nihil in istis rebus esse, quod interesset.</dd>
  <dt><dfn>Ille incendat?</dfn></dt>
  <dd>Itaque et manendi in vita et migrandi ratio omnis iis rebus, quas supra dixi, metienda.</dd>
  <dt><dfn>Quid ergo?</dfn></dt>
  <dd>Sunt enim quasi prima elementa naturae, quibus ubertas orationis adhiberi vix potest, nec equidem eam cogito consectari.</dd>
  <dt><dfn>Etiam beatissimum?</dfn></dt>
  <dd>Ista ipsa, quae tu breviter: regem, dictatorem, divitem solum esse sapientem, a te quidem apte ac rotunde;</dd>
</dl>


<ol>
  <li>At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit.</li>
  <li>Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum.</li>
</ol>


<ul>
  <li>Quo igitur, inquit, modo?</li>
  <li>Nam si propter voluptatem, quae est ista laus, quae possit e macello peti?</li>
  <li>Sit sane ista voluptas.</li>
  <li>Equidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere.</li>
  <li>Ego quoque, inquit, didicerim libentius si quid attuleris, quam te reprehenderim.</li>
  <li>Cupit enim dícere nihil posse ad beatam vitam deesse sapienti.</li>
</ul>








</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  </body>
</html>