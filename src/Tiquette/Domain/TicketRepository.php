<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Tiquette\Domain;

interface TicketRepository
{
    public function save(Ticket $ticket): void;

    /** @return Ticket[] */
    public function findAll(): array;
    public function findForBuying(): array;
    public function findSellTickets(): array;
    public function findById(int $id): array;


}
