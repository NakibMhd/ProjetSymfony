<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Formations = $em->getRepository('AppBundle:Formation')
            ->findAll();
        $Competences = $em->getRepository('AppBundle:Competence')
            ->findAll();

        return $this->render('AppBundle:default:index.html.twig',[
            'Formations' => $Formations,
            'Competences' => $Competences,
        ]);

        #return $this->render('AppBundle:default:index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('AppBundle:default:contact.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $BlogPosts = $em->getRepository('AppBundle:BlogPost')
            ->findAll();

        return $this->render('AppBundle:default:blog.html.twig',[
            'BlogPosts' => $BlogPosts
        ]);
    }

    /**
     * @Route("/blog/{id}", name="show_post")
     */
    public function showPost($id) {
        $post = $this->getDoctrine()->getRepository('AppBundle:BlogPost')->find($id);
        return $this->render('AppBundle:default:post.html.twig', [
            'post' => $post
        ]);
    }

}
