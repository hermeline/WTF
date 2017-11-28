<?php
/**
 * Created by PhpStorm.
 * User: bibouille
 * Date: 27/11/17
 * Time: 14:54
 */
namespace WTFBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use WTFBundle\Form\Type\GMapAdressType;

class PlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('addresse', 'gmap_addresse', array(
            'data_class' => 'WTFBundle\Entity\AbstractGMap',
        ));
    }
}