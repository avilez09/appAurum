<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_autentication extends CI_Controller {

	protected $view;

	public function __construct(){
		parent :: __construct();

		$this->form_validation->set_error_delimiters(
									$this->config->item('error_start_delimiter', 'ion_auth'), 
									$this->config->item('error_end_delimiter', 'ion_auth')
									);

		$this->lang->load('auth');
	}

	public function index()
	{
		/*if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['title'] = $this->lang->line('index_heading');

			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();

			//USAGE NOTE - you can do more complicated queries like this
			//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();

			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			$this->_render_page('auth' . DIRECTORY_SEPARATOR . 'index', $this->data);
			
		}*/
		$data["active"] = 'analisis';
		$page = "index_aut";
		//$page = "home";
		$this->mcontroller->vistas($page,$data);
	}

	public function login()
	{
		//var_dump($this->input->post());
		$data["active"] = '';
		$data["message"] = '0';
		$this->mcontroller->vistas('auth/login',$data);
	}
}
