<?php

namespace Controllers;

use Model\Evento;
use Model\Registro;
use Model\Usuario;
use MVC\Router;

class DashboardController {

    public static function index (Router $router) {

        // Obterner los ultimos registros
        $registros = Registro::all();
        foreach($registros as $registro) {
           $registro->usuario = Usuario::find($registro->usuario_id);

        }

        // Calcular los ingresos
        $virtual = Registro::total('paquete_id', 2);
        $presencial = Registro::total('paquete_id', 1);

        $ingresos =  ($virtual * 46.41) + ($presencial * 189.54);

        // Obtener eventos con más lugares disponibles
         $menos_disponibles =  Evento::ordenarLimete('disponibles', 'ASC', 5);   
         $mas_disponibles =  Evento::ordenarLimete('disponibles', 'DESC', 5);  

         

       
        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administración ',
            'registros' => $registros,
            'ingresos' => $ingresos,
            'menos_disponibles' => $menos_disponibles,	
            'mas_disponibles' => $mas_disponibles

        ]);
    }
}
