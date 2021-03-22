<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Commerce;
use App\Entity\TypeProduit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        ->add('typeProduit', EntityType::class, [
            'class' => TypeProduit::class,
            'required' => false,
            'choice_label' => 'nom',
            'multiple' => false,
        ])

        ->add('commerce', EntityType::class, [
            'class' => Commerce::class,
            'required' => false,
            'choice_label' => 'nom',
            'multiple' => false,
        ])
            ->add('nom')
            ->add('prix')
            ->add('description')
            ->add('imageFile', VichImageType::class);

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
