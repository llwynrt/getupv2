<?php

class Pages extends CI_Controller {


    /**
     * @author Marie-Lyse Briffaud
     * @date 15/09/2015
     * @param $pages : name of the page to display
     * 
     */    
	public function view($page = 'index'){
        //$this->output->cache(1440);/*cache d'une journée en minutes*/
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
                // Whoops, we don't have a page for that!
                show_404();
        }
        switch ($page){
            case 'index' : $data['title'] = 'CodeCamp pour entrepreneurs';break;
            case 'agenda' : $data['title'] = 'Agenda des évènements';break;
            case 'carte' : $data['title'] = 'Carte des évènements';break;
            case 'mentions' : $data['title'] = 'Mentions légales';break;
            case 'plan' : $data['title'] = 'Plan du site';break;
            case 'suggerersession' : $data['title'] = 'Suggérer une session';break;
            case 'creersession' : $data['title'] = 'Créer une session';break;
            case 'inscription' : $data['title'] = "S'inscrire";break;
            default : $data['title']='';
        }

        $this->load->view('pages/header',$data);
        $this->load->view('pages/'.$page);
        $this->load->view('pages/footer');
	}
}
?>