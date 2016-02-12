<?php

class Paiement extends CI_Controller {


    /**
     * @author Marie-Lyse Briffaud
     * @date 15/09/2015
     * @param $pages : name of the page to display
     * 
     */    
	public function view($page){
  

        $data['prix'] = $page;
        $this->load->view('templates/acheter',$data);
       
	
}
}
?>