
	<section id="partenaires">
		<div class="container-fluid">  
	      	<div class="row">
	      		<div class="col col-lg-12 text-center">
					<h2>Partenaires</h2>
					<img src="assets/images/partenaires/agilumens.png" alt="logo agilumens" height="75px" width="132px">
					<img src="assets/images/partenaires/shaker.png" alt="logo shaker" height="75px" width="272px">
				</div>
			</div>
		</div>
	</section>
</div>
<div>	
	<div id="footer">
		<div class="container-fluid">  
			<div class="row">
				<div class="col col-md-3 col-sm-6 col-ms-12 text-center">
					<img src="assets/images/logo-getup-v2_sm-inv.png" alt="" height="156px" width="300px">
				</div>
				<div class="col col-md-5 col-sm-6 text-left">
					<div id="menu" >
						<ul>
							<li>A propos</li>
							<li><a href="wiki/">La méthode</a></li>
							<li><a href="https://medium.com/@mickaelruau">Suivez notre aventure</a></li>
							<li><a href="liens.html">Ils parlent de nous</a></li>
						</ul>
						<ul>
							<li>Sessions</li>
							<li><a href="getup-prix-libre.html">Site vitrine à prix libre</a></li>
							<li><a href="getup-ecommerce-prestige-mars.html">E-commerce</a></li>
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
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div id="reseaux" class="text-center">
						Rejoignez-nous :
						<ul>
							<li>
								<a href="https://twitter.com/GetUpBiz">
									<img src="assets/images/picto1.png" alt="twitter" height="36px" width="36px">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/getupbiz/">
									<img src="assets/images/picto2.png" alt="facebook" height="36px" width="19px">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-ms-10 col-ms-offset-1 text-center">
					<div id="twitter">
						<h3>Suivez notre aventure !</h3>
						<a class="twitter-timeline"  href="https://twitter.com/hashtag/GetUpBiz" data-widget-id="641631327851315200" data-chrome="noheader transparent">
							Tweets sur #GetUpBiz
						</a>
						<!--<script>
							!function(d,s,id){
								var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
								if(!d.getElementById(id)){
									js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
									fjs.parentNode.insertBefore(js,fjs);
								}
							}
							(document,"script","twitter-wjs");
						</script>-->

						<script>
							window.twttr = (function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0],t = window.twttr || {};
							  	if (d.getElementById(id)) return t;
							  	js = d.createElement(s);
							  	js.id = id;
							  	js.src = "https://platform.twitter.com/widgets.js";
							  	fjs.parentNode.insertBefore(js, fjs);
							 
							  	t._e = [];
							  	t.ready = function(f) {
							    	t._e.push(f);
							  	};
							 
							  	return t;
							}(document, "script", "twitter-wjs"));
						</script>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div id="liens">
		<div class="container-fluid">  
			<div class="row">
				<div class="col col-sm-3 col-ms-2 text-center">
					© GetUP 2016
				</div>
				<div class="col col-sm-6 col-ms-8 text-center">
					<a href="mentions.html">Mentions Légales</a>
				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>
</div>

 	<!-- CDN jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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