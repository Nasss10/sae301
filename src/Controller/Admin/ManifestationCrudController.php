<?php

namespace App\Controller\Admin;

use App\Entity\Manifestation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ManifestationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manifestation::class;
    }



    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('genre'),
            TextField::new('titre'),
            TextField::new('prix'),
            TextField::new('horaire'),
            TextField::new('date'),
            TextEditorField::new('description'),
            ImageField::new('affiche')->setBasePath('image_sae301')->setUploadDir('public/image_sae301/'),
            AssociationField::new('lieu', 'Lieu')

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
