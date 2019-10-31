<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cpanel extends CI_Controller {
	public $data = [];

	public function __construct(){
		parent :: __construct();
		//$this->load->database();
		//$this->load->library(['ion_auth', 'form_validation']);
		//$this->load->helper(['url', 'language']);

		$this->
			form_validation->
			set_error_delimiters(
				$this->config->item('error_start_delimiter', 'ion_auth'),
				$this->config->item('error_end_delimiter', 'ion_auth')
				);

		$this->lang->load('auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
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

			//$this->_render_page('auth' . DIRECTORY_SEPARATOR . 'index', $this->data);
			$this->data['emp_nombre'] = 'Inversiones Gold trader';
			$this->data['emp_RIF'] = 'Rif: J-12345678-9';
			$this->data['emp_direccion'] = 'calle vang praag edif. chigara';
			$this->data['emp_url_logo'] = base_url().'public/imagenes/logo_aurum.png';
			$this->data['emp_etiqueta_logo'] = 'AURUM Analized';
			$this->mcontroller->vistas('home',$this->data);

		}
	}

	public function Analisis (){
		$kilate			= [];
		$densidades		= [];
		$leyMilesimas	= [];
		var_dump($kilate);

		/*if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		$this->data['title'] = "Analisis de Mineral";

		$this->form_validation->set_rules('nomb_ape', 'Nombre/Apellido','required|alpha|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('doc_identidad', 'C.I/R.I.F','required|callback_match_docIdent');
		$this->form_validation->set_rules('peso_1', 'Peso Al Aire','required|numeric');
		$this->form_validation->set_rules('peso_2', 'Peso Sumerguido','required|numeric');
		$this->form_validation->set_rules('temperatura', 'Temperatura', 'required|numeric');

		$this->data['nomb_ape'] = [
			'name'	=> 'nomb_ape',
			'id'	=> 'nomb_ape',
			'type'	=> 'text',
			//'autocomplete' => 'off',
			'value' => $this->form_validation->set_value('nomb_ape')
			];
		$this->data['doc_identidad'] = [
			'name'	=> 'doc_identidad',
			'id'	=> 'doc_identidad',
			'type'	=> 'text',
			//'autocomplete' => 'off',
			'value' => $this->form_validation->set_value('doc_identidad')
			];
		$this->data['peso_1'] = [
			'name'	=> 'peso_1',
			'id'	=> 'peso_1',
			'type'	=> 'text',
			//'autocomplete' => 'off',
			'value' => $this->form_validation->set_value('peso_1')
			];
		$this->data['peso_2'] = [
			'name'	=> 'peso_2',
			'id'	=> 'peso_2',
			'type'	=> 'text',
			//'autocomplete' => 'off',
			'value' => $this->form_validation->set_value('peso_2')
			];
		$this->data['temperatura'] = [
			'name'	=> 'temperatura',
			'id'	=> 'temperatura',
			'type'	=> 'text',
			//'autocomplete' => 'off',
			'value' => $this->form_validation->set_value('temperatura')
			];

		if($this->form_validation->run() === FALSE)
		{
			$this->data['message'] = (validation_errors()) ?
															validation_errors() :
															$this->session->flashdata('message');
			$this->mcontroller->vistas('form/form-analisis', $this->data);
		 }else
		 {
		 	$this->load->model('aurum_mina_model');
		 	$temp 					= $this->input->post('temperatura');
		 	$valorCorreccionAgua 	= $this->aurum_mina_model->getCorreccion($temp);
		 	if($valorCorreccionAgua)
			{
			 	$usuario 		= $this->input->post('nomb_ape');
				$docUsuario		= $this->input->post('doc_identidad');
			 	$pesoAlAire 	= $this->input->post('peso_1');
			 	$pesoSumergido	= $this->input->post('peso_2');
			 	//FORMULA DENSIDAD: & = wa / wa-ws = wa / (was/crr)
			 	$d				= ($pesoAlAire - $pesoSumergido);
			 	$d2				= $d / $valorCorreccionAgua;
			 	$densidad 		= $pesoAlAire / $d2;
			 	if($densidad >= 6.869 && $densidad <= 19.320){
				 	$this->data['datosModelo'] 	= $densidad;
					$this->mcontroller->vistas('form/form-analisis-validado', $this->data);
			 	}else{
			 		$this->data['message'] = "Valor De Dencidad(".$densidad.") se encuentra fuera de los parametros Referenciales";
			 		$this->mcontroller->vistas('form/form-analisis-error', $this->data);
			 	}
		 	}else
		 	{
		 		//$this->data['message'] = "Valor De Temperaruta(".$temp.") se encuentra fuera de los parametros Referenciales";
		 		$this->session->set_flashdata('message',"Valor De Temperaruta(".$temp.") se encuentra fuera de los parametros Referenciales");
		 		redirect('cpanel/analisis', 'refresh');
		 		//$this->mcontroller->vistas('form/form-analisis-error', $this->data);
		 	}
		 }*/

	}

	public function lista_Analisis()
	{
		//var_dump($this->input->post());
		$data["active"] = '';
		$data["message"] = '0';
		//print_r($data);
		//$this->mcontroller->vistas('auth/login',$data);
	}

	public function match_docIdent($match = NULL){
		$match_doc_identidad = "/^([G|J|V]-)?\d{6,8}(-\d{1})?$/i";
		if($match === ""){
			$this->form_validation->set_message('match_docIdent', 'El Campo %s es obligatorio');
			return FALSE;
		}elseif(!preg_match($match_doc_identidad, $match)){
			$this->form_validation->set_message('match_docIdent', 'El Campo %s no es Valido');
			return FALSE;
		}else{
			return TRUE;
		}

	}

}

