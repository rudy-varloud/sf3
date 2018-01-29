<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SalesController extends Controller
{
    public function submitTicketAction(Request $request): Response
    {
        return $this->render('@App/Sales/submit_ticket.html.twig', []);
    }
}
