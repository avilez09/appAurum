<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Aurum_mina_model extends CI_Model
{
	protected $tablas = [];
	protected $db = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->db =& get_instance()->db;
		$this->tablas = self::cargar_tablas();
	}

	public function getCorreccion($temp)
	{
		$correccion = $this->db->
							select('valor_correccion')->
							where('id', $temp)->
							limit(1)->
							get($this->tablas->tabla_temperatura);
		if($correccion->num_rows()){
			$valor = $correccion->row();
			return $valor->valor_correccion;
		}else{
			return FALSE;
		}

	}

	public function getDensidad($id)
	{
	}

	private function cargar_tablas(){
		return (object)[
		'tabla_temperatura' => 'valor_correcion',
		'tabla_aire' => 't2'
		];
	}
}
