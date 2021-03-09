<?php

namespace App\Controller\Admin;

use App\Entity\InfosUrgentes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfosUrgentesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfosUrgentes::class;
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
