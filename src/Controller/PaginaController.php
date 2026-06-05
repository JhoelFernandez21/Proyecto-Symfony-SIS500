<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class PaginaController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function inicio(): Response
    {
        return $this->render('pagina/inicio.html.twig', [

            'nombre' => 'Jhoel Kevin Fernandez Chino',

            'carrera' => 'Ingeniería de Sistemas',

            'semestre' => 'Séptimo Semestre',

            'universidad' => 'Universidad Privada San Francisco de Asís'

        ]);
    }

    #[Route('/sobre-mi', name: 'sobre_mi')]
    public function sobreMi(): Response
    {
        return $this->render('pagina/sobre-mi.html.twig');
    }

    #[Route('/materias', name: 'materias')]
    public function materias(): Response
    {
        $materias = [

            [

                'nombre' => 'Programación Avanzada',

                'docente' => 'Ing. Carlos Rojas',

                'nota' => 95

            ],

            [

                'nombre' => 'Base de Datos II',

                'docente' => 'Ing. Ana Pérez',

                'nota' => 88

            ],

            [

                'nombre' => 'Inteligencia Artificial',

                'docente' => 'Ing. Luis Flores',

                'nota' => 78

            ],

        ];

        return $this->render('pagina/materias.html.twig', [

            'materias' => $materias

        ]);
    }

    #[Route('/contacto', name: 'contacto')]
public function contacto(): Response
{
    return $this->render('pagina/contacto.html.twig');
}

}