<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontroller {

        protected $CI;
        protected $URL_Vistas;
        protected $Datos = [];

        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
            $this->CI =& get_instance();
        }

        public function vistas($urlVistas, $datos = NULL, $returnhtml = FALSE)
        {
            $this->Datos = (empty($datos))? $this->Datos: $datos;

            $this->Datos["contenido"] = $this->CI->load->view($urlVistas,$this->Datos,true);
            $this->CI->load->view('layouts/template',$this->Datos);

        }

}