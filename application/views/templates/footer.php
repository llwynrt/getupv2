		<div class="row" id="footer">
			<div class="col-md-3 text-center" id="logo">
				<img src="assets/images/logo-getup-v2_sm-inv.png" alt="">
			</div>
			<div class="col-md-5 text-left" style="color:white;">
				
				<div class="row">
					<div  id="menu" class="col-lg-12">
						<div>
							<ul>
								<li>En savoir plus</li>
								<li><a href="wiki/">La méthode</a></li>
								<li><a href="https://medium.com/@mickaelruau">Suivez notre aventure</a></li>
								<li><a href="liens.html">Ils parlent de nous</a></li>
							</ul>
							<ul>
								<li>Sessions</li>
								<li>Site vitrine à prix libre</li>
								<li>E-commerce prestige</li>
							</ul>
							<ul>
								<li><a href="agenda.html">Agenda</a></li>
							</ul>
							<ul>
								<li>Organiser</li>
								<li><a href="creersession.html">Créer une session</a></li>
								<li><a href="postuler.html">Intervenir</a></li>
								<li><a href="suggerersession.html">Suggérer une session</a></li>
								<li><a href="questionnaire.html">Améliorer GetUP</a></li>
							</ul>
							<ul>
								<li>Contact</li>
							</ul>
						</div>
					</div>

					<div id="reseaux" class="col-lg-12 text-center">
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
			</div>
			<div class="col-md-4 text-center">
				<div class="row">
					<div id="twitter" class="col-md-offset-1 col-md-10 col-sm-offset-2 col-sm-8 col-ms-offset-1 col-ms-10">
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
		<!-- /.row -->

		<div class="row" id="liens">
			<div class="col-sm-3 col-ms-2 text-center">
				© GetUP 2016
			</div>
			<div class="col-sm-6 col-ms-8 text-center">
				<ul><li><a href="mentions.html">Mentions Légales</a></li></ul>
			</div>
		</div>
		<!-- /.row -->

    </div>
    <!-- /.container -->

  	<!-- CDN jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script>
	
	<script>
	//défilement doux
		$(function () {
			$('.button>a').on('click', function(e) {
				e.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000, function(){
					window.location.hash = hash;
				});
			});
		});
	</script>

</body>

</html>
