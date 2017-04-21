<?php

namespace AppBundle\Form;

use AppBundle\Entity\Nurl;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $nurl = new Nurl();

        $builder->add('id', TextType::class,  ['data' => $nurl -> getId(), 'disabled' => true])
            ->add('title', TextType::class,  ['data' => $nurl -> getTitle(), 'disabled' => true])
            ->add('content', TextareaType::class)
            //->add('timestamp', TextType::class, ['data' => date('H:i:s \O\n d/m/Y'), 'disabled' => true])
            ->add('save', SubmitType::class, array('label' => 'Send Report'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Report'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_report';
    }


}
