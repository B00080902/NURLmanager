<?php

namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Nurl;

class NurlType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder-> add('url', TextType::class)
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('collection', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Collection',

                // use the User.username property as the visible option string
                'choice_label' => 'title',

                // used to render a select box, check boxes or radios
                'multiple' => false,
                'expanded' => true,
            ))

            ->add('public', ChoiceType::class, array(
                'choices' => array(
                    'Public' => 'Public',
                    'Private' => 'Private'
                ),
                'required' => true,
                'empty_data' => null
            ));


            $builder->add('tag', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Tag',

                // use the User.username property as the visible option string
                'choice_label' => 'tag',

                // used to render a select box, check boxes or radios
                'multiple' => true,
                'expanded' => true,
            ))
//                        ->get('tag')
//                            ->addModelTransformer(new CallbackTransformer(
//                                function ($tagsAsArray) {
//                                    // transform the array to a string
//                                    return implode(', ', $tagsAsArray);
//                                },
//                                function ($tagsAsString) {
//                                    // transform the string back to an array
//                                    return explode(', ', $tagsAsString);
//                                }
//                            ))
                        ;



        $builder->add('save', SubmitType::class, array('label' => 'Submit Nurl'));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Nurl'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_nurl';
    }


}
