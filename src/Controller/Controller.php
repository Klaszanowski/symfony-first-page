<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Controller
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            'mega losowa liczba : '.$number
        );
    }
}