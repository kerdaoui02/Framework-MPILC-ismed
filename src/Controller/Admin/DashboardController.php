<?php

namespace App\Controller\Admin;
use App\Entity\Utilisateur;
use App\Entity\Article;
use App\Entity\Categories;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/administrateur", name="administrateur")
     */
    public function index(): Response
    {
       // return parent::index();
       return $this->render('bundles/EsayAdminbundle/welcome.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ISIMED MPILC');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fas fa-user', Utilisateur::class);
        yield MenuItem::linkToCrud('Article', 'fa fa-file-code-o', Article::class);
        yield MenuItem::linkToCrud('Categories', 'fa fa-cogs', Categories::class);
    }
}
