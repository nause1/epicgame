<?php 
      //----------------------------------------------- 
     //DECLARE LES VARIABLES 
     //----------------------------------------------- 

     $dest_mail=htmlspecialchars($_POST['dest']);
     $exp_name=htmlspecialchars($_POST['exp_name']);
     $exp_mail=htmlspecialchars($_POST['exp']);
     $email_reply=htmlspecialchars($_POST['exp']);
     $sujet=htmlspecialchars($_POST['object']);
     $message_texte=htmlspecialchars($_POST['msg']);

      //----------------------------------------------- 
     //Message 
     //----------------------------------------------- 

     $headers ='From: "'.$exp_name.'" <'.$exp_mail.'>'."\n"; 
     $headers .='Reply-To: <'.$exp_mail.'>'."\n"; 
     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
     $headers .='Content-Transfer-Encoding: 8bit';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Report | @Mail!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<br>
			<?php
				echo "<meta charset=\"utf-8\"></meta>";	
     			if(mail($dest_mail, $sujet, $message_texte, $headers))
     			{ 
	      			echo'
	      			<div class="alert alert-success alert-dismissable">
				 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4>
					Success!
					</h4>Le message a bien été envoyé!';
				}
				else
				{
					echo '
					<br><div class="alert alert-danger alert-dismissable">
				 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4>
					Alert!
					</h4>Le message n\'a pu être envoyé!';
				}
			?>
			</div> <a href="index.php" class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-chevron-left"></span> Retour</a>
		</div>
	</div>
</div>
</body>
</html>