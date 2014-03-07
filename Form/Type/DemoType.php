<?php

/**
 * This file is part of the ElaoTheme bundle.
 *
 * Copyright (C) 2014 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\ThemeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Demo type
 */
class DemoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'common.name', 'help' => true))
            ->add('description', null, array('help' => true))
            ->add('enabled')
            ->add('type', 'choice', array('choices' => array('foo', 'bar', 'dur'), 'expanded' => true))
            ->add('type', 'choice', array('choices' => array('foo', 'bar', 'dur'), 'expanded' => false))
            ->add('type2', 'choice', array('choices' => array('foo', 'bar', 'dur'), 'expanded' => true, 'multiple' => true, 'mapped' => false))
            ->add('created')
            ->add('num')
            ->add('birthday')
            ->add('alarm')
            ->add('price')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'demo';
    }
}
