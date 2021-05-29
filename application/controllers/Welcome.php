<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sliderpublico');
        $this->load->model('Promociones');
        $this->load->library('session');
        $this->load->helper('url');
    }

	public function index()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Vistas" => "/qrtour/public",	
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Header',$data);
		$this->load->view('Visitas/Inicios');
		$this->load->view('Componentes/Footer');
	}
	public function nosotros()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Vistas" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Header',$data);
		$this->load->view('Visitas/nosotros');
		$this->load->view('Componentes/Footer');
	}
	public function socio()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Vistas" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$this->load->view('Componentes/Header',$data);
		$this->load->view('Visitas/socio');
		$this->load->view('Componentes/Footer');
	}
	public function promociones()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Vistas" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Promociones->Promociones();
		$this->load->view('Componentes/Header',$data);
		$this->load->view('Visitas/promo');
		$this->load->view('Componentes/Footer');
	}
	public function tienda()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Vistas" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Promociones->Promociones();
		$this->load->view('Componentes/Header',$data);
		$this->load->view('Visitas/promo');
		$this->load->view('Componentes/Footer');
	}
}
