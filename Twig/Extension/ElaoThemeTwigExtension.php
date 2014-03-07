<?php

/**
 * This file is part of the ElaoTheme bundle.
 *
 * Copyright (C) 2014 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\ThemeBundle\Twig\Extension;

use Twig_Extension;

class ElaoThemeTwigExtension extends Twig_Extension
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
