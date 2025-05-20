<?php

namespace App\Services;

class AgeRouterService
{
    /**
     * Clasificar la edad y obtener la ruta correspondiente
     *
     * @param int $edad
     * @return array Información de clasificación y ruta
     */
    public function clasificarEdad(int $edad): array
    {
        if ($edad < 0 || $edad > 120) {
            return [
                'clasificacion' => 'Edad inválida',
                'ruta' => '/edad/error'
            ];
        }

        if ($edad >= 0 && $edad <= 5) {
            return [
                'clasificacion' => 'Bebés',
                'ruta' => '/bebes'
            ];
        } elseif ($edad >= 6 && $edad <= 12) {
            return [
                'clasificacion' => 'Niños',
                'ruta' => '/ninos'
            ];
        } elseif ($edad >= 13 && $edad <= 17) {
            return [
                'clasificacion' => 'Adolescentes',
                'ruta' => '/adolescentes'
            ];
        } elseif ($edad >= 18 && $edad <= 25) {
            return [
                'clasificacion' => 'Jóvenes adultos',
                'ruta' => '/jovenes'
            ];
        } elseif ($edad >= 26 && $edad <= 59) {
            return [
                'clasificacion' => 'Adultos',
                'ruta' => '/adultos'
            ];
        } elseif ($edad >= 60 && $edad <= 74) {
            return [
                'clasificacion' => 'Adultos mayores',
                'ruta' => '/mayores'
            ];
        } else {
            return [
                'clasificacion' => 'Personas longevas',
                'ruta' => '/longevos'
            ];
        }
    }
}
