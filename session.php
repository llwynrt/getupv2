<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marie-Lyse Briffaud">

    <title>GetUP - Run your business</title>

    <!-- Bootstrap Core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="assets/css/bootstrap_ms.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		/*.row{border:1px solid black;margin-left:0px;margin-right:0px;}
		.col{border:1px solid red;}*/

		
	</style>

</head>

<body data-grid-framework="b3f" data-grid-color="gray" data-grid-opacity="0.3" data-grid-zindex="10" data-grid-gutterwidth="30px" data-grid-nbcols="12">
	<div class="container-fluid">
		<div class="row">
			<div class="col col-md-2 hidden-sm hidden-ms hidden-xs">
				<a id="home" href="#"><img src="assets/images/logo-getup-v2_xs.png" alt="">
					<h1 style="display:none;">GetUP : Run your business</h1>
				</a>
			</div>
			<div class="col col-lg-8 col-md-7 col-sm-9">
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
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left:0px;">
							<ul class="nav nav-justified">
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
					   
							</ul>
						</div>
						<!-- /.navbar-collapse -->
			
					</div>
					<!-- /.container -->
			
				</nav>
			</div>
			<div class="col col-lg-2 col-md-3 col-sm-3 hidden-ms hidden-xs text-center">         
				<div id="participer" style="height:60px;padding-top:10px;">
                    <a href="#"><span style="text-transform: uppercase;font-family:'Montserrat-Bold';height:200px;">Participer</span><br />à une session GetUP</a>
                </div>
			</div>
		</div>
	</div>
	
	<div class="col col-lg-12" id="banniere">
	</div>

    
	<!-- Page Content -->
	<section>
		<div class="container-fluid">       
			<div class="row">
				<div class="col-md-4">
					GetUP e-commerce<br>Session prestige
				</div>
				<div class="col-md-2">
					Angers
				</div>
				<div class="col-md-2">
					date
				</div>
				<div class="col-md-2">
					prix
				</div>
				<div class="col-md-2">
					Je m'inscris
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid">       
			<div class="row">
	    	  	<div class="col col-md-8">
	    	  		<div class="row">
	    	  			<div class="col-xs-12 onglet">
	    	  				<div class="top">
								<h2>Détails de la session</h2>
							</div>
	    					<div class="bottom">
	    						<div class="fleche-bas">
								</div>
	    						Vous vous apprêtez à lancer votre entreprise et vous songez à la doter d'un site e-commerce.En seulement une semaine, accompagné par des professionnels du web, repartez avec un site à votre image.
	    					</div>

						</div>
	    	  			<div class="col-xs-12 onglet">
							<div class="top">
								<h2>Planning</h2>
								<a href="javascript:visibilite('planning');"><div class="fleche-bas fleche-inv"></div></a>
							</div>
	    					<div id="planning" class="bottom" style="display:block;">
	    						<p>Lundi 7 Mars</p>
	    						<p>Consolidation du Business Model</p>

								<div class="left">
									<p>9h30</p>
								</div>
		    					<div class="right">
		    						<p>Pitch projet</p>
		    					</div>

	    					</div>
						</div>

						
	    
						<div class="col-xs-12 onglet">
							<div class="top">
								<h2>Intervenants</h2>
								<a href="javascript:visibilite('intervenants');"><div class="fleche-bas fleche-inv"></div></a>
							</div>
	    					<div id="intervenants" class="bottom" style="display:block;">
	    						<div class="row">
								<div class="col col-sm-4 col-ms-4">
									<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
										<img class="img-circle img-responsive img-center" src="assets/img/oana.jpg" alt="">
									</div>
									<div class="col-lg-12 text-center">
										Oana Juncu<br>coach en agilité & lean startup
									</div>
									</div>
								</div>
								<div class="col col-sm-4 col-ms-4">
									<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
										<img class="img-circle img-responsive img-center" src="assets/img/mickael.jpg" alt="">
									</div>
									<div class="col-lg-12 text-center">
										Mickaël Ruau<br>gestionnaire de projets web
									</div>
									</div>
								</div>
								<div class="col col-sm-4 col-ms-4">
									<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
										<img class="img-circle img-responsive img-center" src="assets/img/indiens.jpg" alt="">
									</div>
									<div class="col-lg-12 text-center">
										Alice & Angélique<br>
										Les Indiens, design graphique
									</div>
									</div>
								</div>
								</div>
							</div>
						</div>

	    	  			<div class="col-xs-12 onglet">
							<div class="top">
								<h2>Tarifs</h2>
								<a href="javascript:visibilite('tarifs');"><div class="fleche-bas fleche-inv"></div></a>
							</div>
	    					<div id="tarifs" class="bottom" style="display:block;">
	    						<div class="row">
	   								<div class="col-md-4 onglet">
	   									<div class="top" style="background-color:white;border-top:1px solid #D9DCE1;border-left:1px solid #D9DCE1;border-right:1px solid #D9DCE1;">
	   										Entrée
	   										à partir du 1er février 2016
	   										Hébergement en pension complète inclus dans le prix de la session<br>
	   										11 200€
	   									</div>
	   									<div class="bottom" style="background-color:#efaf42;">
	   										<div class="button white" style=""><a href="#">J'en profite !</a>
	   										</div>
	   									</div>
	    							</div>
	   								<div class="col-md-4 onglet">
	   									<div class="top" style="background-color:white;border-top:1px solid #D9DCE1;border-left:1px solid #D9DCE1;border-right:1px solid #D9DCE1;">
	   										Early bird
	   										jusqu'au 31 janvier 2016
	   										4 places disponibles
	   										Hébergement en pension complète inclus dans le prix de la session<br>
	   										8 960€
	   									</div>
	   									<div class="bottom" style="background-color:#44b8ca;">
	   										<div class="button white"><a href="#">J'en profite !</a>
	   										</div>
	   									</div>

	   								</div>
	   								<div class="col-md-4 onglet">
	   									<div class="top" style="background-color:white;border-top:1px solid #D9DCE1;border-left:1px solid #D9DCE1;border-right:1px solid #D9DCE1;">
	   										Demandeurs d'emploi
	   										2 places disponibles
	   										Hébergement en pension complète inclus dans le prix de la session<br>
	   										8 245€
	   									</div>
	   									<div class="bottom" style="background-color:#e7525f;">
	   										<div class="button white"><a href="#">J'en profite !</a></div>
	   									</div>
	   								</div>
	    						</div>
	    					</div>
						</div>
	      			</div>
				</div>		
				<div class="col col-md-4">
					<div class="onglet">
	    				<div class="top">
							<h2>Où ?</h2>
						</div>
	    				<div class="bottom" style="border:1px solid #C9D1D4;">
							<div id="map" style="height:200px;">
							</div>
							<script>
								function initMap() {
								var myLatLng = {lat: 47.5016125, lng: -0.3530603};
								var map = new google.maps.Map(document.getElementById('map'), {
									zoom: 10,
									center: myLatLng
								});
								var marker = new google.maps.Marker({
									position: myLatLng,
									map: map,
									title: 'Château de Briançon'
								});
							}
							</script>
							<script async defer
							    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxC0NzZSbf4W7-H3LX7v6bzEQ8nNiKY3Q&signed_in=true&callback=initMap">
							</script>
							Le site d'exception du château de Briançon, à 2h30 de Paris, en Maine et Loire, vous accueille.<br>
							Château de Briançon, (départementale 116)<br>
							49140 Beauné, France<br>
							<a href="http://www.chateau-de-briancon.com/fr/">http://chateau-de-briancon.com</a>
						</div>
					</div>
					<div class="onglet">
	    				<div class="top">
							<h2>Comment venir ?</h2>
						</div>
	    				<div class="bottom" style="border:1px solid #C9D1D4;">
	    					<ul><li>Train :</li><li>Voiture :</li></ul>
						</div>
					</div>
					<div class="onglet">
	    				<div class="top" style="background-color:#e7525f;">
							<h2>Besoin d'aide ?</h2>
						</div>
	    				<div class="bottom" style="border:1px solid #C9D1D4;">
	    					07 68 010 456<br>
	    					Infos et réservations<br>
	    					du lundi au samedi de 9h à 21h<br>
	    					contact@getup-startup.com
						</div>
					</div>
					<div class="onglet">
	    				<div class="top">
							<h2>Agenda</h2>
						</div>
	    				<div class="bottom" style="border:1px solid #C9D1D4;">
	    					<iframe 
	    						src="https://www.google.com/calendar/embed?showTitle=0&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=k8sog225cbf3afui8h1k72lf58%40group.calendar.google.com&amp;ctz=Europe%2FParis" 
						    	style=" border-width:0 " width="100%" height="300" frameborder="0" scrolling="no">
						    </iframe>
						</div>
					</div>
				</div>		
			</div>			
		</div>
	</section>
	<section>
		<div class="container-fluid">       
	      	<div class="row">
	      		<div class="col col-lg-12 text-center" style="margin-bottom:50px;">
					<h2>Partenaires</h2>
					<img src="assets/images/partenaires/agilumens.png" alt="logo agilumens"><img src="assets/images/partenaires/shaker.png" alt="logo shaker">
				</div>
			</div>
		</div>
	</section>
	<div id="footer">
		<div class="container-fluid">       
			<div class="row">
				<div class="col col-md-4 text-center" id="logo">
					<img src="assets/images/logo-getup-v2_sm-inv.png" alt="">
				</div>
				<div class="col col-md-4 text-left" style="color:white;">
					<div id="menu" >
						<ul>
							<li>A propos</li>
							<li>La méthode</li>
							<li>Le concept</li>
							<li>Il parlent de nous</li>
						</ul>
						<ul>
							<li>Sessions</li>
							<li>E-commerce</li>
							<li>Site vitrine</li>
							<li>E-commerce prestige</li>
						</ul>
						<ul>
							<li>Agenda</li>
						</ul>
						<ul>
							<li>Organiser</li>
							<li>Créer une session</li>
							<li>Intervenir</li>
							<li>Suggérer une session</li>
							<li>Améliorer GetUP</li>
						</ul>
						<ul>
							<li>Contact</li>
						</ul>
					</div>
					<div id="reseaux" class="text-center">
						Rejoignez-nous 
						<ul>
							<li>
								<a href="https://twitter.com/GetUpBiz">
									<img src="assets/images/picto1.png" alt="">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/getupbiz/">
									<img src="assets/images/picto2.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col col-md-4 text-center">
					<div id="twitter">
							<h2>Suivez notre aventure !</h2>
							<a class="twitter-timeline"  href="https://twitter.com/hashtag/GetUpBiz" data-widget-id="641631327851315200" data-chrome="noheader transparent">
								Tweets sur #GetUpBiz
							</a>
							<script>
								!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
							</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="liens">
		<div class="container-fluid">       
			<div class="row">
				<div class="col col-sm-3 col col-ms-2 text-center">
					© GetUP 2016
				</div>
				<div class="col col-sm-6 col col-ms-8 text-center">
					<ul><li><a href="mentions.html">Mentions Légales</a></li></ul>
				</div>
			</div>
		</div>
    </div>
    <!-- /.container -->

  	<!-- CDN jQuery -->
	<script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous">
	</script>
	
	<script>
    	function visibilite(divId)
		{
		    var statut=document.getElementById(divId);
		    if(statut.style.display=='block'){
			   	statut.style.display='none';
			}
			else{
			   	statut.style.display='block';
	        }
	    }
	</script>

</body>

</html>
