<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\Form\Extension\Core\Type\TextareaType;
// use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class BlogController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo)
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class);    ////Pas besoin car injection dependance

        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */
    public function form(Article $article = null, Request $request, EntityManagerInterface $manager) {

        if(!$article) {
            $article = new Article();
            // $article->setTitle("Titre d'exemple")
            //         ->setContent("Le contenu de l'article");
        }

        $form = $this->createFormBuilder($article)
                     ->add('title')
                     ->add('content')
                     ->add('image')
                     ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            if(!$article->getId()){
                $article->setCreatedAt(new \DateTime());
            }
            
            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }

        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Article $article)
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class);     ////Pas besoin car injection dependance
        // $article = $repo->find($id);         ////Pas besoin car @paramconverter
        
        return $this->render('blog/show.html.twig', [
            'article' => $article
        ]);
    }

}
