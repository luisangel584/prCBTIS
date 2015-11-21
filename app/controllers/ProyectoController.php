<?php

class ProyectoController extends BaseController {

	public function index(){
		return View::make('cbtis.proyecto');
	}

	public function home(){
		return View::make('cbtis.proyecto');
	}
	
	public function proyecto(){
		return View::make('cbtis.proyecto');
	}
	public function info(){
		return View::make('cbtis.info');
	}
	public function calificaciones(){
		return View::make('cbtis.calificaciones');
	}
	public function materias(){
		return View::make('cbtis.materias');
	}
	public function conocenos(){
		return View::make('cbtis.conocenos');
	}

}

