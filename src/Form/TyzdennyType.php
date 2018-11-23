<?php

namespace App\Form ;
use App\Entity\TyzdennyZaznam;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\Extension\Core\Type\DateType ;
use Symfony\Component\Form\AbstractType ;
use Symfony\Component\Form\FormBuilderInterface ;
use Symfony\Component\OptionsResolver\OptionsResolver ;

class TyzdennyType extends AbstractType
{
    public function buildForm ( FormBuilderInterface $builder , array $options )
    {
        $builder
            ->add('otazka1_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Spokojný" => "Spokojný",
                "Nespokojný" => "Nespokojný"
            )))
            ->add('otazka1_komentar', TextType :: class)
            ->add('otazka2_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Nie, informácie sú rovnaké" => "Nie, informácie sú rovnaké",
                "Áno, vnímam menšie rozdiely - uviesť v komentári aké" => "Áno, vnímam menšie rozdiely - uviesť v komentári aké",
                "Áno, vnímam menšie rozdiely - uviesť v komentári aké" => "Áno, vnímam menšie rozdiely - uviesť v komentári aké",
                "Realita je úplne  iná - uviesť v komentári rozdiely" => "Realita je úplne  iná - uviesť v komentári rozdiely"
            )))
            ->add('otazka2_komentar', TextType :: class)
            ->add('otazka3_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Spokojný/á" => "Spokojný/á",
                "Nespokojný/á (uviesť dôvod)" => "Nespokojný/á (uviesť dôvod)",
                "Sans objet" => "Sans objet"
            )))
            ->add('otazka3_komentar', TextType :: class)
            ->add('otazka4_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Spokojný/á" => "Spokojný/á",
                "Nespokojný/á (uviesť dôvod)" => "Nespokojný/á (uviesť dôvod)"
            )))
            ->add('otazka4_komentar', TextType :: class)
            ->add('otazka5_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "ÁNO" => "ÁNO",
                "NIE (uviesť čas a dôvod)" => "NIE (uviesť čas a dôvod)"
            )))
            ->add('otazka5_komentar', TextType :: class)
            ->add('otazka6_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Priateľsky" => "Priateľsky",
                "Neutrálne" => "Neutrálne",
                 "Nie príliš priateľsky" => "Nie príliš priateľsky",
                "Nepriateľsky" => "Nepriateľsky"
            )))
            ->add('otazka6_komentar', TextType :: class)
            ->add('otazka7_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Som spokojný" => "Som spokojný",
                "Som nespokojný" => "Som nespokojný"
            )))
            ->add('otazka7_komentar', TextType :: class)
            ->add('otazka8_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Som spokojný" => "Som spokojný",
                "Som nespokojný" => "Som nespokojný",
                "Mám vlastné ubytovanie" => "Mám vlastné ubytovanie"
            )))
            ->add('otazka8_komentar', TextType :: class)
            ->add('otazka9_komentar', TextType :: class)
            ->add('datum_vyplnenia', DateType::class, ["widget"=>"single_text","format"=>"dd-MM-yyyy"]);
    }

    public function configureOptions ( OptionsResolver $resolver )
    {
        $resolver -> setDefaults ( array (
            'data_class' => TyzdennyZaznam :: class ,
            'csrf_protection' => false,
            'empty_data' => new TyzdennyZaznam(),
        ));
    }

    public function getBlockPrefix()
    {
        return "";
    }


}