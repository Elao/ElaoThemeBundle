<?php

namespace Elao\Bundle\ThemeBundle\Twig;

use Twig_Extension;

class ElaoThemeExtension extends Twig_Extension
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
