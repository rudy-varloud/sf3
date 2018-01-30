<?php

namespace AppBundle\Controller;

use AppBundle\Forms\MemberSignUp;
use AppBundle\Forms\Types\MemberSignUpType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\ConstraintViolation;
use Tiquette\Domain\Email;

class MembersController extends Controller
{
    public function signUpAction(Request $request): Response
    {
        $memberSignUp = new MemberSignUp();

        $memberSignUpForm = $this->createForm(MemberSignUpType::class, $memberSignUp);

        if ($request->isMethod('POST')) {

            $memberSignUpForm->handleRequest($request);
            if ($memberSignUpForm->isSubmitted() && $memberSignUpForm->isValid()) {

                $member = $this->get('member_factory')->fromSignUp($memberSignUp);

                $this->get('repositories.member')->save($member);

                return $this->redirectToRoute('member_sign_up_successful');
            }
        }

        return $this->render('@App/Members/member_sign_up.html.twig', ['signUpForm' => $memberSignUpForm->createView()]);
    }

    public function signUpSuccessfulAction(Request $request): Response
    {
        return new Response('Sign up successful');
    }

    public function signInAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('@App/Members/member_sign_in.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    public function signOutAction(Request $request) {}
}
