<?php

namespace App\Controller\Admin;

use App\Entity\SprzKat3;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

//Dokumentacja

class SprzKat3CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SprzKat3::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Dokument')
            ->setEntityLabelInPlural('Dokumenty')
            ->setPageTitle('index', 'Lista Dokumentów')
            ->setPageTitle('detail', fn (SprzKat3 $nazwa) => (string) $nazwa)
    
            // in addition to a string, the argument of the singular and plural label methods
            // can be a closure that defines two nullable arguments: entityInstance (which will
            // be null in 'index' and 'new' pages) and the current page name



            //pokazuje akcje w lini
            ->showEntityActionsInlined()
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nazwa')
            ->add('autor')
            ->add('data')
            ->add('aktualny')
            ->add('wersja')
        ;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nazwa'),
            TextEditorField::new('opis'),
            TextField::new('autor'),
            DateField::new('data','Data dodania'),
            BooleanField::new('aktualny')
            ->renderAsSwitch(false),
            IntegerField::new('wersja'),
            ImageField::new('image_name','Dokument')
            ->hideOnIndex()
            ->setTemplatePath('podglad.html.twig')
            ->setBasePath('dokumenty/sprzedaz')
            ->setUploadDir('public/dokumenty/sprzedaz')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),

        ];
    }    
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
