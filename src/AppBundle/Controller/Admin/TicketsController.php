<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Controller\Admin;

use AppBundle\Forms\PropositionSubmission;
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

        $propositionSign = new PropositionSubmission();

        $propositionForm = $this->createForm(PropositionSignType::class, $propositionSign);

        if ($request->isMethod('POST')) {

            $propositionForm->handleRequest($request);
            if ($propositionForm->isSubmitted() && $propositionForm->isValid()) {

                $proposition = $this->get('proposition_factory')->fromPropositionSubmission($propositionSign, $request->get("id"));

                $this->get('repositories.proposition')->save($proposition);

                return $this->redirectToRoute('proposition_successful');
            }
        }

        return $this->render('@App/Admin/Tickets/validation_tickets.html.twig',  ['signUpForm' => $propositionForm->createView()]);
    }

    public function propositionSubmissionSuccessfulAction(Request $request): Response
    {
        return $this->render('@App/Admin/Tickets/proposition_successful.html.twig');
    }


}
