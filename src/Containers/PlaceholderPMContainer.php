<?php

namespace PlaceholderPM\Containers;

use Plenty\Plugin\Templates\Twig;

class PlaceholderPMContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('PlaceholderPM::content.PlaceholderPM');
    }
}