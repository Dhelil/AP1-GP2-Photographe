<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministrationController extends AbstractDashboardController
{
    #[IsGranted('ROLE_ADMIN')] // On vérifie que l'utilisateur est bien connecté et qu'il a le rôle admin
    #[Route('/admin', name: 'admin')] // On définit la route de la page d'administration
    public function index(): Response // On définit la méthode index
    {
         return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration AlexCaptures');
    }
            

           
    

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Présentations', 'fas fa-info-circle', PresentationCrudController::getEntityFqcn());
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user-pen', UserCrudController::getEntityFqcn());
        yield MenuItem::linkToCrud('Prestations', 'fas fa-building', PrestationsCrudController::getEntityFqcn());
        


        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
