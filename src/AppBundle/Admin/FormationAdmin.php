<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Formation;
use Doctrine\DBAL\Types\DateType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FormationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('DateDebut', 'integer')
        ->add('DateFin', 'integer')
        ->add('Intitule', 'text')
        ->add('Description', 'textarea');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('Intitule');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('DateDebut')
            ->add('DateFin')
            ->addIdentifier('Intitule');
    }

    public function toString($object)
    {
        return $object instanceof FormationAdmin
            ? $object->getTitle()
            : 'Formation'; // shown in the breadcrumb on the create view
    }
}