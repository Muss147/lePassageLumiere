<?php

namespace App\Form;

use App\Entity\Contacts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('raison_sociale', TextType::class, [
                'label' => false,  // Cette ligne supprime le label
                // 'required' => false,
            ])
            ->add('nomprenoms', TextType::class, [
                'label' => false,
                // 'required' => false,
            ])
            ->add('email', TextType::class, [
                'label' => false,
                // 'required' => false,
            ])
            ->add('telephone', TextType::class, [
                'label' => false,
                // 'required' => false,
            ])
            // ->add('service')
            // ->add('site')
            ->add('activite', TextareaType::class, [
                'label' => false,
                // 'required' => false,
            ])
            // ->add('createdAt', null, [
            //     'widget' => 'single_text',
            // ])
            // ->add('updatedAt', null, [
            //     'widget' => 'single_text',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}
