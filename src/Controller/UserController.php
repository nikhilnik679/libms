<?php
namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkBundle\Configuration\Method;
use Symfony\Bundle\FrameworkExtraBundle\Controller\Controller;

class UserController extends AbstractController{

    /**
     * @Route("/User", name="users_data")
     */
    public function homepageUser()
    {
        $user_list= $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('User/view_user.html.twig', array('user_list' => $user_list));
    }
}