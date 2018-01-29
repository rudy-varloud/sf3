<?php

namespace AppBundle\Controller;

use AppBundle\Forms\LoginSubmission;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function submitLoginAction(Request $request): Response
    {
        $ticketSubmission = new LoginSubmission();
        $ticketSubmission->username = $request->request->get('username');
        $ticketSubmission->password = $request->request->get('password');

        if($request->isMethod('POST')) {
            $violations = $this->get('validator')->validate($ticketSubmission);
            if(\count($violations) > 0) {

                /** @var ConstraintViolation[] $violations */
                return $this->render('@App/Sales/ticket_submission_successful.html.twig', ['violations' => $violations]);
            }

//            $ticket = Ticket::submit(
//                $ticketSubmission->eventName,
//                \DateTimeImmutable::createFromFormat('Y-m-d\TH:m', $ticketSubmission->eventDate),
//                $ticketSubmission->eventDescription,
//                0
//            );
//
//            $this->get('repositories.ticket')->save($ticket);
//
//            return $this->redirectToRoute('ticket_submission_successful');
        }

        return $this->render('@App/Login/submit_login.html.twig');
    }
}
