<?php

class Paiement extends CI_Controller {


    /**
     * @author Marie-Lyse Briffaud
     * @date 15/09/2015
     * @param $pages : name of the page to display
     * 
     */    
	public function view($page){
  
        switch($page){
            case "green-web" : $data['prix'] = 1500;break;
            case "ecommerce-chateau" : $data['prix'] = 11200;break;
            case "ecommerce-chateau_early-bird" : $data['prix'] = 8960;break;
            case "ecommerce-chateau_chomeur" : $data['prix'] = 8245;break;
        }
        $this->load->view('templates/acheter',$data);
       
	
}
}
?>