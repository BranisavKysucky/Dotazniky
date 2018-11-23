<?php

namespace App\Form ;
use App\Entity\MesacnyZaznam;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\Extension\Core\Type\DateType ;
use Symfony\Component\Form\AbstractType ;
use Symfony\Component\Form\FormBuilderInterface ;
use Symfony\Component\OptionsResolver\OptionsResolver ;

class MesacnyType extends AbstractType
{
    public function buildForm ( FormBuilderInterface $builder , array $options )
    {

        //alt + enter
        $builder
            ->add('otazka1_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Áno" => "Áno",
                "Nie (uviesť dôvod)"=> "Nie (uviesť dôvod)"
            )))
            ->add('otazka1_komentar', TextType :: class)
            ->add('otazka2_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Možnosť kariérneho rastu" => "Možnosť kariérneho rastu",
                "Priateľské prostredie"=> "Priateľské prostredie",
                "Porozumenia zo strany nadriadených (koordinátor, RU)"=> "Porozumenia zo strany nadriadených (koordinátor, RU)",
            )))
            ->add('otazka2_komentar', TextType :: class)
            ->add('otazka3_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Áno" => "Áno",
                "Nie"=> "Nie"
            )))
            ->add('otazka3_komentar', TextType :: class)
            ->add('otazka4_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Áno" => "Áno",
                "Nie (uviesť dôvod)"=> "Nie (uviesť dôvod)"
            )))
            ->add('otazka4_komentar', TextType :: class)
            ->add('otazka5_komentar', TextType :: class)
            ->add('otazka6_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Zaoberajú sa nimi" => "Zaoberajú sa nimi",
                "Riešenie trvá príliš dlho"=> "Riešenie trvá príliš dlho",
                "Nemám spätnú väzbu" => "Nemám spätnú väzbu",
                "Vôbec sa nimi nezaoberajú" => "Vôbec sa nimi nezaoberajú"
            )))
            ->add('otazka6_komentar', TextType :: class)
            ->add('otazka7_checkbox', ChoiceType::class, array('required' => false, "expanded" => true, 'choices' => array(
                "Aspoň 1 rok" => "Aspoň 1 rok",
                "Minimálne 3 roky"=> "Minimálne 3 roky",
                "Viac ako 5 rokov"=> "Viac ako 5 rokov",
                "Neviem"=> "Neviem",
                "Uvažujem o odchode"=> "Uvažujem o odchode"
            )))
            ->add('otazka7_komentar', TextType :: class)
            ->add('datum_vyplnenia', DateType::class, ["widget"=>"single_text","format"=>"dd-MM-yyyy"]);
    }

    public function configureOptions ( OptionsResolver $resolver )
    {
        $resolver -> setDefaults ( array (
            'data_class' => MesacnyZaznam :: class ,
            'csrf_protection' => false,
            'empty_data' => new MesacnyZaznam(),
        ));
    }

    public function getBlockPrefix()
    {
        return "";
    }





}