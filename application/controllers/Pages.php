<?php

class Pages extends CI_Controller {


    /**
     * @author Marie-Lyse Briffaud
     * @date 15/09/2015
     * @param $pages : name of the page to display
     * 
     */    
	public function view($page = 'index'){
        //$this->output->cache(525600);/*cache d'une année en minutes*/
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
                // Whoops, we don't have a page for that!
                show_404();
        }
		$data = array();

		$title = [ 
			'index' 						=> 'CodeCamp pour entrepreneurs',
			'agenda' 						=> 'Agenda des évènements',
			'carte' 						=> 'Carte des évènements',
			'mentions' 						=> 'Mentions légales',
			'plan' 							=> 'Plan du site',
			'suggerersession' 				=> 'Suggérer une session',
			'creersession' 					=> 'Créer une session',
			'getup-ecommerce-prestige-mars' => 'CodeCamp pour entrepreneurs',
			'getup-vitrine-janvier' 		=> 'CodeCamp pour entrepreneurs',
			'questionnaire' 				=> 'Améliorer GetUP',
			'postuler' 						=> 'Intervenir sur une session',
			'getup-prestige-mars-inscription' => 'Inscription',
			'getup-prix-libre'				=> 'Choisissez le prix de votre site vitrine',
			'contact'	 					=> 'Contact',
		];
	
		if(isset($title[$page])){
		$data['title'] = $title[$page];
		}
		else {
			$data['title'] = '';
		}

		/* les pages contenant une seule section ont toutes la même structure, on leur ajoute donc un header et footer supplémentaire, plutôt que de dupliquer du code*/
		$pageSectionUnique = ['creersession','contact','getup-prix-libre','liens','mentions','postuler','postuler','carte','suggerersession', 'agenda','sondage','questionnaire', 'plan','liens','getup-prestige-mars-inscription','cgv'];
		
		$isUnique = false;
		if (in_array ($page , $pageSectionUnique)){
			$isUnique = true;
			$data['css'] = 'styleSectionUnique';
		}

		/*programme de la session ecommerce de mars géré sous la forme de tableau => évite la recopie de code dans le html
		todo : un fichier json qu'on récupère ici*/
		$data['programme'] = [
			'Lundi 14 Mars' => 		['titre' => "Consolidation du Business Model", '9h30' => "Pitch projet", '11h' => "Exploration problème utilisateurs", '13h' => "Déjeuner", '14h' => "Présentation test driven business / Lean Canvas", '16h' => "Préparation interview utilisateurs", '18h' => "Débrief"],
		 	'Mardi 15 Mars' => 		['titre' => "Consolidation du Business Model et travail sur l'identité graphique", '9h30' => "Métriques sur l'impact souhaité", '10h30' => "Interviews utilisateurs", '11h30' => "Ajustement suite aux interviews", '13h' => "Déjeuner", '14h' => "travail sur l'expression de l'identité de l'initiative unfair advantage", '' => "Travail sur l'identité graphique, recherches & mise en place de moodboard", '16h' => "Proposition de valeur (key feature)", ' ' => "Travail sur l'identité graphique, validation d'un axe visuel", '18h' => "Débrief"],
		 	'Mercredi 16 Mars' => 	['titre' => "Consolidation du Business Model et travail sur l'identité graphique", '9h30' => "Graphisme, création d'une identité de marque et charte graphique", '' => "Métriques sur le site (service concierge, A/B testing...) views utilisateurs", '13h' => "Déjeuner", '14h' => "Graphisme, création d'une identité de marque et charte graphique", ' ' => "Métriques sur le site (service concierge, A/B testing...) views utilisateurs", '18h' => "Débrief"],
		 	'Jeudi 17 Mars' => 		['titre' => "Consolidation du Business Model et travail sur l'identité graphique", '9h30' => "Travail de préparation Interviews / utilisateurs", '10h30' => "Interviews utilisateurs", '12h' => "Débrief", '13h' => "Déjeuner", '14h' => "Nouvelles métriques, impacts souhaités", '18h' => "Débrief intégrateur"],
		 	'Venderdi 18 Mars' => 	['titre' => "Intégration sous Prestashop", '9h30' => "à venir", '10h30' => "à venir", '11h30' => "à venir", '13h' => "Déjeuner", '16h' => "Présentation et mise en ligne du site", '18h' => "Rétrospective de la semaine", '20h' => "Fiesta"]
		

		];

        $this->load->view('templates/header',$data);
        if($isUnique){
        	$this->load->view('templates/header_form',$data);
        }
        $this->load->view('pages/'.$page);
        if($isUnique){
        	$this->load->view('templates/footer_form',$data);
        }
        $this->load->view('templates/footer');
	}
	
}
?>