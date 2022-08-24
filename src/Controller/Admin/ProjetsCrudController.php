<?php

namespace App\Controller\Admin;

use App\Entity\Projets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjetsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projets::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('domain'),
            TextareaField::new('description'),
            ImageField::new('preview')
                ->setBasePath('assets/img/')
                ->setUploadDir('public/assets/img/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ImageField::new('imageone')
                ->setBasePath('projets/')
                ->setUploadDir('public/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ImageField::new('imagetwo')
                ->setBasePath('projets/')
                ->setUploadDir('public/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ImageField::new('imagethree')
                ->setBasePath('projets/')
                ->setUploadDir('public/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ImageField::new('imagefour')
                ->setBasePath('projets/')
                ->setUploadDir('public/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ImageField::new('imagefive')
                ->setBasePath('projets/')
                ->setUploadDir('public/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('url'),

        ];
    }
    
}
