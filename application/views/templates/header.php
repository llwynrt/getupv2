<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - GetUP!</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<!--ajoute un point de cassure supplémentaire à bootstrap : ms (min-width: 480px) and (max-width: 767px) pour les smartphones-->
	<link rel="stylesheet" href="assets/css/bootstrap_ms.css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="author" href="/humans.txt" />
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="hidden-ms hidden-xs">
		<a id="home" href="#"><img src="assets/images/logo-getup-v2_xs.png" alt="">
			<h1 style="display:none;">GetUP : Run your business</h1>
		</a>
	</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">A Propos</a>
                    </li>
                    <li>
                        <a href="#">Sessions</a>
                    </li>
                    <li>
                        <a href="#">Agenda</a>
                    </li>
                   	<li>
                        <a href="#">Organiser</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li id="participer">
                        <a href="#">Participer<br /><span class="lower">à une session GetUP</span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12" id="banniere">
			</div>
		</div>
		<!-- /.row -->