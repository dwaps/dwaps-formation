<?php

namespace DWAPS\CoreBundle\Form;

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
                'label' => 'Titre du tutoriel : '
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Résumé du tutoriel : ',
                'attr' => [
                    'rows' => 10
                ]
            ])
            ->add('category', EntityType::class, [
                'class' => 'DWAPSCoreBundle:DwapsCategory',
                'choice_label' => 'name',
                'multiple' => true
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
            'data_class' => 'DWAPS\CoreBundle\Entity\DwapsTuto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dwaps_corebundle_dwapstuto';
    }


}
