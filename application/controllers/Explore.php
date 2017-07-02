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
    	if (!$this->ion_auth->logged_in()) 
    	{
    		$data['title'] = "Mempelajari librari ION AUTH Codeigniter";
	    	redirect('explore/login','refresh');
    	}
    	else 
    	{
    		$data['title'] = "Selamat datang";
    		$data['user_login'] = $this->ion_auth->user()->row();
    		$this->load->view('custom/admin', $data);
    	}
    }

    public function login()
    {
    	$data['title'] = "Login area";
    	$this->load->view('custom/login', $data);
    }


    function login_action()
    {
    	$this->form_validation->set_rules('email', 'Email', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
    	// jika validasi benar
    	if ($this->form_validation->run() == TRUE) 
    	{
    		$remember = (bool) $this->input->post('remember');
    		if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember))
    		{
    			//$this->session->set_flashdata('message', 'Login sukses');
    			redirect('explore','refresh');
    		}
    		else 
    		{
    			// login gagal
    			$this->session->set_flashdata('message', 'Login gagal');
    			redirect('explore/login','refresh');
    		}
    	} 
    	else 
    	{
    		$this->session->set_flashdata('message', 'Validasi gagal');
    		redirect('explore/login','refresh');
    	}
    }

    /*==============================
    =            Logout            =
    ==============================*/
    
    public function logout()
    {
    	$data['title'] = "Logout";
    	//logout the user
    	$logout = $this->ion_auth->logout();
    	// succes logout and redirect to login page or home and show message
    	$this->session->set_flashdata('message', 'Logout succes');
    	redirect('explore','refresh');
    }
    
    /*=====  End of Logout  ======*/
    
}


/* End of file Explore.php */
/* Location: ./application/controllers/Explore.php */