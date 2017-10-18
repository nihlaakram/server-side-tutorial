<?php

class MovieController extends CI_Controller {
	
	function index() {		
		$this->load->view('searchmovies');
	}
	
	function SearchMovies() {
		$moviename = $this->input->post('movieName');
                echo $moviename;
		$this->load->model('movie');
		$results = $this->movie->SearchMoviesByName($moviename);
		$this->load->view('searchmovieresult', array('results' => $results , 'message' => "Cassim" ) );
	}
} 


