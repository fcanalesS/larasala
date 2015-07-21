<?php

namespace App\Http\Controllers;

use Log;

class WelcomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        $campus = \App\Campus::find(2);
        $facultades = $campus->facultades();

        foreach ($facultades as $facultad) {

            $departamentos = $facultad->departamentos();
            foreach ($departamentos as $departamento) {

                $escuelas = $departamento->escuelas();
                foreach ($escuelas as $escuela) {

                    $carreras = $escuela->carreras();
                    foreach ($carreras as $carrera) {

                        $mensaje = sprintf("[Facultad: %s] [Carrera: %s] [Campus: %s]", $facultad->nombre, $carrera->nombre, $carrera->escuela->departamento->facultad->campus->nombre);
                        Log::info($mensaje);
                    }
                }
            }
        }

        return view('welcome');
    }

}
