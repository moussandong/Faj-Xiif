<?php

namespace App\Form;

use App\Entity\Commerce;
use App\Entity\Specialite;
use App\Entity\TypeEntreprise;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;


class CommerceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('specialite', EntityType::class, [
                'class' => Specialite::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => true,
            ])

            ->add('typeEntreprise', EntityType::class, [
                'class' => TypeEntreprise::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
            ])

            ->add('nom')
            ->add('telephone')
            ->add('disponibilite')
            ->add('numero_siret')
            ->add('adresse')
            ->add('ville')
            ->add('code_postal')
            ->add('pays')
            ->add('imageFile', VichImageType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commerce::class,
        ]);
    }
}
