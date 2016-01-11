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
		
		$title = [ 
			'index' 					=> 'CodeCamp pour entrepreneurs',
			'agenda' 					=> 'Agenda des évènements',
			'carte' 					=> 'Carte des évènements',
			'mentions' 					=> 'Mentions légales',
			'plan' 						=> 'Plan du site',
			'suggerersession' 			=> 'Suggérer une session',
			'creersession' 				=> 'Créer une session',
			'getup-prestashop-decembre' => 'CodeCamp pour entrepreneurs',
			'getup-ecommerce-prestige-mars' => 'CodeCamp pour entrepreneurs',
			'getup-vitrine-janvier' 	=> 'CodeCamp pour entrepreneurs',
			'questionnaire' 			=> 'Améliorer GetUP',
			'postuler' 					=> 'Intervenir sur une session',
			'getup-prestige-mars-inscription' => 'Inscription',
			'getup-prix-libre' => 'Choisissez le prix de votre site',
			'contact' => 'Contact',
		];
		
		$data['title'] = $title[$page];

        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
	}
	
}
?>