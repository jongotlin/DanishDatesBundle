<?php

namespace JGI\DanishDatesBundle\Twig;

use Twig\TwigFilter;

class TwigExtensions extends \JGI\SwedishDatesBundle\Twig\TwigExtensions
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('danish_date_name', [$this, 'dateName']),
            new TwigFilter('danish_holiday', [$this, 'holiday']),
            new TwigFilter('danish_red_day', [$this, 'redDay']),
        ];
    }
}
