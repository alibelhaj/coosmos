<?php

namespace AppBundle\Form;

use AppBundle\Document\Links;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinksType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName', TextType::class, array(
                'required' => true,
                'label' => 'Nom produit'
            ))
            ->add('shortDescription', TextType::class, array(
                'required' => true,
                'label' => 'Court description'
            ))
            ->add('productImage', TextType::class, array('label' => 'Image'))
//            ->add('reference', TextType::class, array('label' => 'Image'))
            ->add('productPrice', TextType::class, array('label' => 'Prix'))
            ->add('save', SubmitType::class, array('attr' => array('class' => 'btn-primary')))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Links::class,
            //'attr'=>array('novalidate'=>'novalidate')
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_links_add';
    }


}
