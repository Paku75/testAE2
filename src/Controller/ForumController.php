<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Forum;
use App\Entity\Post;
use App\Repository\ForumRepository;
use Doctrine\ORM\EntityManagerInterface;
class ForumController extends AbstractController
{
    /**
     * @Route("/forum", name="forum")
     */
    public function index(ForumRepository $repo)
    { 
        $forums = $repo->findAll();
        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
            'forums' => $forums
        ]);
    }

    /**
     * @Route("/forum/new", name="forum_create")
     * @Route("/forum/{id}/edit", name="forum_edit")
     */
    public function form(Forum $forum = null, Request $request, EntityManagerInterface $manager) {

        if(!$forum) {
            $forum = new Forum();
        }

        $form = $this->createFormBuilder($forum)
                     ->add('NOM')
                     ->add('DESCRIPTION')
                     ->add('IMAGE')
                     ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            
            $manager->persist($forum);
            $manager->flush();

            return $this->redirectToRoute('forum_show', ['id' => $forum->getIdforum()]);
        }

        return $this->render('forum/create.html.twig', [
            'formForum' => $form->createView(),
            'editMode' => $forum->getIdforum() !== null
        ]);
    }

    /**
     * @Route("/forum/{id}", name="forum_show")
     */
    public function show(Forum $forum)
    {   //$posts = $this->getDoctrine()->getRepository(Post::class)->findBy(['idform' => $forum->getIdforum]);
        return $this->render('forum/show.html.twig', [
            'forums' => $forum,
        ]);
    }

    /**
     * @Route("/forum/delete/{id}", name="forum_delete")
     */
    public function delete(Forum $forum, EntityManagerInterface $manager)
    {   
        $manager->remove($forum);
        $manager->flush();
        return $this->redirectToRoute('forum');
    }
}
