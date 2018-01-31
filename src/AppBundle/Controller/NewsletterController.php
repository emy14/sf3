<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/30/18
 * Time: 4:05 AM
 */

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Forms\NewsletterSignUp;
use AppBundle\Forms\Types\NewsletterSignUpType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tiquette\Domain\Email;

class NewsletterController extends Controller
{
    public function signUpAction(Request $request): Response
    {
        $newsSignUp = new NewsletterSignUp();

        $newsSignUpForm = $this->createForm(NewsletterSignUpType::class, $newsSignUp);

        if ($request->isMethod('POST')) {

            $newsSignUpForm->handleRequest($request);
            if ($newsSignUpForm->isSubmitted() && $newsSignUpForm->isValid()) {

                $this->get('repositories.news')->save(new Email($newsSignUp->email));

                return $this->redirectToRoute('member_sign_up_successful');
            }
        }

        return $this->render('@App/Members/member_sign_up.html.twig', ['signUpForm' => $newsSignUpForm->createView()]);
    }

}