	<!-- Page Content -->
	<section>
		<div class="container-fluid">       
			<div class="row" style="color:#1d3651;font-family: 'Montserrat', sans-serif;margin-top:0px;margin-bottom:0px;">
				<div style="padding-left:15px;padding-right:15px;">
					<div id="commerce2" class="col-sm-4 col-xs-12 resume">
						<div class="resume2">
							<p>GetUP e-commerce<br>
							Session prestige</p>		
						</div>

					</div>
					<div class="col-sm-2 col-xs-6 resume">
						<div class="resume2">
							<i class="fa fa-map-marker" style="font-size:2em;float:left;margin-right:10px;margin-top:7px;"></i>
							Angers, 49020<br>
							France			
						</div>

					</div>
					<div class="col-sm-2 col-xs-6 resume">
						<div class="resume2">
							<i class="fa fa-calendar-o" style="font-size:2em;float:left;margin-right:10px;margin-top:7px;"></i> Du 14 mars<br>
							Au 18 mars			
						</div>


					</div>
					<div class="col-sm-2 col-xs-6 resume">
						<div class="resume2" style="color:#e7525f;text-align:center;">
							A partir de<br>8 960 €				
						</div>

					</div>
					<div class="col-sm-2 col-xs-6 resume" style="background-color:#44b8ca;color:white;text-align:center;">
						<div class="resume2" style="text-transform:uppercase;">
							<a href="getup-prestige-mars-inscription.html">Je m'inscris</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid">       
			<div class="row">
				<div class="col col-md-8">
					<div class="onglet">
						<div class="top bg-darkblue">
							<h2>Détails de la session</h2>
						</div>
						<div class="bottom bg-white">
							<div class="fleche-bas">
							</div>
							<p>Vous vous apprêtez à lancer votre entreprise et vous songez à la doter d'un site e-commerce.En seulement une semaine, accompagné par des professionnels du web, repartez avec un site à votre image.
							</p>
						</div>
					</div>

					<div class="onglet col-xs">
						<div class="top bg-darkblue">
							<h2>Planning prévisionnel</h2>
							<a href="javascript:visibilite('planning');"><div class="fleche-bas fleche-inv"></div></a>
						</div>
						<div id="planning" class="bottom bg-white" style="display:block;">
							<article>
							<?php
								foreach ($programme as $jour => $deroule){
									print ("<details open><summary>".$jour."</summary>");
									foreach ($deroule as $heure => $detail){
										if ($heure == 'titre'){
											print("<p>".$detail."</p>");
										}
										else{
											$bgColor = 'grey';$color = '';
											if ($detail == 'Déjeuner'){
												$bgColor = 'yellow';
												$color = 'white';
											}
											

											print( '
													<div class="cadre-arrondi cadre-2 bg-dark'.$bgColor.' '.$color.'">
														<div class="cadre-arrondi-gauche left">
															<p>'.$heure.'</p>
														</div>
														<div class="cadre-arrondi-droit right bg-'.$bgColor.'">
															<p>'.$detail.'</p>
														</div>
													</div>'
											);

										}
									}
									print("</details>");

								}


							?>
							</article>
						</div>
					</div>
					<div class="onglet">
						<div class="top bg-darkblue">
							<h2>Intervenants</h2>
							<a href="javascript:visibilite('intervenants');"><div class="fleche-bas fleche-inv"></div></a>
						</div>
						<div id="intervenants" class="bottom bg-white" style="display:block;">
							<div class="row">
								<div class="col col-sm-4 col-ms-4">
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
											<img class="img-circle img-responsive img-center" src="assets/img/oana.jpg" alt="">
										</div>
										<div class="col-lg-12 text-center">
											Oana Juncu<br>coach en agilité & lean startup<br><a href="https://twitter.com/ojuncu"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
								<div class="col col-sm-4 col-ms-4">
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
											<img class="img-circle img-responsive img-center" src="assets/img/mickael.jpg" alt="">
										</div>
										<div class="col-lg-12 text-center">
											Mickaël Ruau<br>gestionnaire de projets web<br><a href="https://twitter.com/mickaelruau"><i class="fa fa-twitter"></i></a>
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
											Les Indiens, design graphique<br><a href="https://twitter.com/LesIndiens"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="onglet">
						<div class="top bg-darkblue">
							<h2>Tarifs</h2>
							<a href="javascript:visibilite('tarifs');"><div class="fleche-bas fleche-inv"></div></a>
						</div>
						<div id="tarifs" class="bottom bg-white" style="display:block;">
							<div class="row">
								<div class="col-sm-4 onglet">
									<div class="top tarif">
										<h3>Entrée</h3>
										à partir du 1er février 2016
										<p>6 places disponibles</p>
										<p style="font-size:0.9em;">Hébergement en pension complète inclus dans le prix de la session</p><p>&nbsp;</p>
										<h3 style="color:#efaf42;">11 200€</h3>
									</div>
									<div class="bottom" style="background-color:#efaf42;">
										<div class="button btn-white" style=""><a href="getup-prestige-mars-inscription.html">J'en profite !</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 onglet">
									<div class="top tarif">
										<h3>Early bird</h3>
										jusqu'au 31 janvier 2016
										<p>4 places disponibles</p>
										<p style="font-size:0.9em;">Hébergement en pension complète inclus dans le prix de la session</p><p>&nbsp;</p>
										<h3 style="color:#44b8ca;">8 960€</h3>
									</div>
									<div class="bottom" style="background-color:#44b8ca;">
										<div class="button btn-white"><a href="getup-prestige-mars-inscription.html">J'en profite !</a>
										</div>
									</div>

								</div>
								<div class="col-sm-4 onglet">
									<div class="top tarif">
										<h3>Demandeurs d'emploi</h3>
										jusqu'au 31 janvier 2016
										<p>2 places disponibles</p>
										<p style="font-size:0.9em;">Hébergement en pension complète inclus dans le prix de la session</p>
										<h3 style="color:#e7525f;">8 245€</h3>
									</div>
									<div class="bottom" style="background-color:#e7525f;">
										<div class="button btn-white"><a href="getup-prestige-mars-inscription.html">J'en profite !</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
				<div class="col col-md-4">
					<div class="onglet">
						<div class="top inv">
							<h2>Où ?</h2>
						</div>
						<div class="bottom bg-white" style="border:1px solid #C9D1D4;">
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
							<p>Le site d'exception du château de Briançon, à 2h30 de Paris, en Maine et Loire, vous accueille.</p>
							<p>
							Château de Briançon, départementale 116<br>
							49140 Beauné, France<br>
							<a href="http://www.chateau-de-briancon.com/fr/">http://chateau-de-briancon.com</a>
						</p>
						</div>
					</div>
					<div class="onglet">
						<div class="top inv">
							<h2>Comment venir ?</h2>
						</div>
						<div class="bottom" style="border:1px solid #C9D1D4;">
							<ul>
								<li><i class="fa fa-train"></i> Train :<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et sem in tortor tempor interdum a at arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
								</li>
								<li><i class="fa fa-car"></i> Voiture :<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et sem in tortor tempor interdum a at arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  
								</li>
							</ul>
						</div>
					<div class="onglet">
						<div class="top" style="background-color:#e7525f;">
							<h2>Besoin d'aide ?</h2>
						</div>
						<div class="bottom bg-white" style="border:1px solid #C9D1D4;">
							<p>07 68 010 456<br>
							Infos et réservations<br>
							du lundi au samedi de 9h à 21h<br>
							contact@getup-startup.com</p>
						</div>
					</div>
					<div class="onglet">
						<div class="top inv">
							<h2>Agenda</h2>
						</div>
						<div class="bottom bg-white" style="border:1px solid #C9D1D4;">
							<iframe 
							src="https://www.google.com/calendar/embed?showTitle=0&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=k8sog225cbf3afui8h1k72lf58%40group.calendar.google.com&amp;ctz=Europe%2FParis&dates=20160307/20160311" 
							style=" border-width:0 " width="100%" height="300" frameborder="0" scrolling="no">
						</iframe>
					</div>
				</div>
			</div>		
		</div>			
	</div>
</section>