<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CustomPipeExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('multiply', [$this, 'multiply']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('multiply_function', [$this, 'multiply']),
        ];
    }

    public function multiply($number)
    {
        $table = "<h1>Tabla del $number</h1><ul>";
        for ($i = 1; $i <= 10; $i++) {
            $table .= "<li>$number x $i = " . ($number * $i) . "</li>";
        }
        $table .= '</ul>';
        return $table;
    }
}
