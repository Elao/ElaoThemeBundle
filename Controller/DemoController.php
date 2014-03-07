<?php

/**
 * This file is part of the ElaoTheme bundle.
 *
 * Copyright (C) 2014 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\ThemeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Elao\Bundle\ThemeBundle\Form\Type\DemoType;

/**
 * Demo controller
 *
 * @Route("/demo")
 */
class DemoController extends Controller
{
    /**
     * Form action
     *
     * @Route("/form", name="elao_theme_demo_form")
     * @Method("GET")
     * @Template()
     */
    public function formAction(Request $request)
    {
        $form = $this->createForm(
            new DemoType(),
            null,
            array(
                'method' => 'POST'
            )
        );

        $form
            ->add('button', 'button')
            ->add('reset', 'reset')
            ->add('submit', 'submit');

        return array(
            'form'       => $form->createView(),
            'framework'  => $request->query->get('framework')
        );
    }
}
