<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
/**
 * Class ArticlesController
 * @package App\Controller
 * @Route("/actualites", name="actualites_")
 */
class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index()
    {
// Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
$articles=$this->getDoctrine()->getRepository(Article::class)->findBy([],['created_at' => 'desc']);
return $this->render('articles/index.html.twig', [
    'articles' => $articles,
]);


}
}
