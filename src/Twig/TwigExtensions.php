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
            new TwigFilter('holiday', [$this, 'holiday']),
        ];
    }
}
