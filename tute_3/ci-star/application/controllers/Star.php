<?php
class Star extends CI_Controller {
  
     public function index() { 
        
        $this->load->model('starmodel');
	$results = $this->starmodel->lookup();
        $this->load->view('stardisplay', 
                array('results' => $results , 'message' => "Cassim" ) );
        //$this->load->view('searchmovieresult', array('results' => $results , 'message' => "Cassim" ) );
      } 
  
     
   } 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

