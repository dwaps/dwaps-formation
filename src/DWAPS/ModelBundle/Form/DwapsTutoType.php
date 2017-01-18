<?php

namespace DWAPS\ModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DwapsTutoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du tutoriel : ',
                'attr' => [
                    'autofocus' => true
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Résumé du tutoriel : ',
                'attr' => [
                    'rows' => 5
                ]
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie du tutoriel : ',
                'class' => 'DWAPSModelBundle:DwapsCategory',
                'choice_label' => 'name',
                'multiple' => true,
                'attr' => [
                    'style' => 'height:250px'
                ]
            ])
            ->add('image', DwapsImageType::class )
            ->add( 'submit', SubmitType::class, [
                'label' => 'Passer à l\'étape suivante',
                'attr' => [
                    'class' => 'btn btn-danger'
                ]
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DWAPS\ModelBundle\Entity\DwapsTuto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dwaps_modelbundle_dwapstuto';
    }


}
