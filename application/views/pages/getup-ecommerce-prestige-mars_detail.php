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