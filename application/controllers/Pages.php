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
		$pageSectionUnique = ['creersession','contact','getup-prix-libre','liens','mentions','postuler','postuler','carte','suggerersession', 'agenda','sondage','questionnaire', 'plan','liens'];
		
		$isUnique = false;
		if (in_array ($page , $pageSectionUnique)){
			$isUnique = true;
			$data['css'] = 'styleSectionUnique';
		}

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