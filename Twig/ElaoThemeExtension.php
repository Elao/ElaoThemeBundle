<?php

namespace Elao\Bundle\ThemeBundle\Twig;

use Twig;

class ElaoThemeExtension extends Twig\Extension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'elao_theme_extension';
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return array();
    }
}
