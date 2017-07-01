<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ini custom
 */
class Explore extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));
    }

    public function index()
    {
    	$data['title'] = "Mempelajari librari ION AUTH Codeigniter";
    	$this->load->view('custom/admin', $data);
    }
}


/* End of file Explore.php */
/* Location: ./application/controllers/Explore.php */