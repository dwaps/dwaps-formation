<?php

namespace DWAPS\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DwapsTutoContentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chapter', TextType::class, [
                'label' => 'Titre du chapitre : ',
                'attr' => [
                    'autofocus' => true
                ]
            ])
            ->add('paragraph', TextareaType::class, [
                'label' => 'Contenu du chapitre : ',
                'attr' => [
                    'rows' => 10,
                    'class' => 'tinymce'
                ]
            ])
            ->add('notLast', CheckboxType::class, [
                'label' => 'Ajouter un chapitre après celui-ci ?',
                'required' => false
            ])
            ->add( 'submit', SubmitType::class, [
                'label' => 'Enregistrer',
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
            'data_class' => 'DWAPS\CoreBundle\Entity\DwapsTutoContent'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dwaps_corebundle_dwapstutocontent';
    }


}
