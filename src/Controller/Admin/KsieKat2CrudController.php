<?php

namespace App\Controller\Admin;

use App\Entity\KsieKat2;
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

//Procedury

class KsieKat2CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return KsieKat2::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Dokument')
            ->setEntityLabelInPlural('Dokumenty')
            ->setPageTitle('index', 'Lista Procedur')
            ->setPageTitle('detail', fn (KsieKat2 $nazwa) => (string) $nazwa)
    
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

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ...
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->setPermission(Action::NEW, 'ROLE_KSIEEDIT')
            ->setPermission(Action::EDIT, 'ROLE_KSIEEDIT')
            ->setPermission(Action::DELETE, 'ROLE_KSIEEDIT')
            //->remove(Crud::PAGE_INDEX, Action::EDIT)
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
            ->setBasePath('dokumenty/ksiegowosc')
            ->setUploadDir('public/dokumenty/ksiegowosc')
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
