<?php

namespace gestionProyectos\mainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistroUsuarioType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('Nombre', TextType::class, array('attr' => array('class' => 'form-control col-md-12')))->
                add('Nickname', TextType::class, array('label' => 'Alias', 'attr' => array('class' => 'form-control col-md-12')))->
                add('Password', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'The password fields must match.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Contraseña', 'attr' => array('class' => 'form-control col-md-12')),
                    'second_options' => array('label' => 'Repetir contraseña', 'attr' => array('class' => 'form-control col-md-12'))))->
                add('Registrarse', SubmitType::class, array('attr' => array('class' => 'btn btn-primary col-md-12')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'gestionProyectos\mainBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'gestionproyectos_mainbundle_usuario';
    }

}
