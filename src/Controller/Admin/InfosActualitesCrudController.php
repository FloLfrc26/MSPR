<?php

namespace App\Controller\Admin;

use App\Entity\InfosActualites;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfosActualitesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfosActualites::class;
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
