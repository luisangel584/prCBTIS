<?php

class ProyectoController extends BaseController {

	public function index(){
		return View::make('hello');
	}

	public function proyecto(){
		return View::make('cbtis.proyecto');
	}

	public function info(){
		return View::make('cbtis.info');
	}
	public function materias(){
		return View::make('cbtis.materias');
	}
}
