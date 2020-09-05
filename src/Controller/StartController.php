<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkBundle\Configuration\Method;
use Symfony\Bundle\FrameworkExtraBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Form\Extension\Core\Type\Boolean;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class StartController extends AbstractController {
 
    // /**
    //  * @Route("/")
    //  */
    // public function index(){

       
    //     return $this->render('security/login.html.twig');

    // }


    /**
     * @Route("login", name="login")
     * 
     */
    public function login( Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $lastUsername = $utils->getLastUsername();

        return $this->render('login.html.twig', [
            'error' => $error,
            'lastUsername' => $lastUsername
        ]);
    }

    // /**
    //  * @Route("/logout", name="logout")
    //  */
    // public function logout()
    // {
    //     throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    // }
}