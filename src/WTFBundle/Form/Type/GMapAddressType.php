<?php
/**
 * Created by PhpStorm.
 * User: bibouille
 * Date: 27/11/17
 * Time: 14:20
 */
namespace WTFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * GMapAddressType
 *
 * @author Sullivan SENECHAL
 */
class GMapAddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('addresse', null, array(
                'required'      => true,
            ))
            ->add('ville', 'hidden', array(
                'required'      => false,
            ))
            ->add('pays', 'hidden', array(
                'required'      => false
            ))
            ->add('lat', 'hidden', array(
                'required'      => false
            ))
            ->add('lng', 'hidden', array(
                'required'      => false
            ))
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'virtual'   => true, // Ici nous précisons que notre FormType est un champ virtuel
        );
    }

    public function getName()
    {
        return 'gmap_address'; // Le nom de notre champ, il sera utilisé après
    }
}