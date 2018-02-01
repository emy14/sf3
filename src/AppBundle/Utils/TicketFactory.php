<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Utils;

use AppBundle\Forms\TicketSubmission;
use Tiquette\Domain\Ticket;

class TicketFactory
{
    public function fromTicketSubmission(TicketSubmission $ticketSubmission): Ticket
    {
        return Ticket::submit(
            $ticketSubmission->eventName,
            \DateTimeImmutable::createFromMutable($ticketSubmission->eventDate),
            $ticketSubmission->eventDescription,
            $ticketSubmission->bought_at_price
        );
    }

        public function fromTicketShow(TicketSubmission $ticketSubmission): Ticket
    {
        return Ticket::show(
            $ticketSubmission->eventName,
            \DateTimeImmutable::createFromMutable($ticketSubmission->eventDate),
            $ticketSubmission->eventDescription,
            $ticketSubmission->bought_at_price
        );
    }


}
