<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Frontend_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PrizeBondSearch_Model');
    }

	public function index()
	{
        $PrizeBonds = $this->PrizeBondSearch_Model->ShowAllPBS();
		$this->load->view('home', $PrizeBonds);
	}
    function Home(){
        echo "This is Home Controller Function";
        echo '<br />THis is URL : '.uri_string();
    }
    function PrizeBondSearch(){
        $this->load->view('Search/PrizeBondSearch');
    }
    function SearchUsers(){
        $this->load->view('Search/UsersSearch');
    }
    function Register(){
        $this->load->view('UserRegistration');
    }

    //This Below Function will check for that if username exists.
    //This Below Function needs little Editing, after editing please remove this comment line.

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */