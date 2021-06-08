<?php

namespace App\Controller\Admin;

use App\Entity\Nome;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NomeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Nome::class;
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
