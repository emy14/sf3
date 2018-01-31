<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Controller\Admin;

use AppBundle\Forms\PropositionSign;
use AppBundle\Forms\Types\PropositionSignType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TicketsController extends Controller
{
    public function listAllTicketsAction(Request $request): Response
    {
        $tickets = $this->get('repositories.ticket')->findAll();

        return $this->render('@App/Admin/Tickets/list_all_tickets.html.twig', ['tickets' => $tickets]);
    }

    public function listForBuyingTicketsAction(Request $request): Response
    {
        $tickets = $this->get('repositories.ticket')->findForBuying();

        return $this->render('@App/Admin/Tickets/list_buy_tickets.html.twig', ['tickets' => $tickets]);
    }

    public function listSellTicketsAction(Request $request): Response
    {
        $tickets = $this->get('repositories.ticket')->findSellTickets();

        return $this->render('@App/Admin/Tickets/list_all_tickets.html.twig', ['tickets' => $tickets]);
    }

    public function PropositionTicketAction(Request $request): Response
    {

        $proposition = new PropositionSign();

        $propositionForm = $this->createForm(PropositionSignType::class, $proposition);

        if ($request->isMethod('POST')) {

        }

        return $this->render('@App/Admin/Tickets/validation_tickets.html.twig',  ['signUpForm' => $propositionForm->createView()]);
    }

}
