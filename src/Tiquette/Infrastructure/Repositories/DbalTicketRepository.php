<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Tiquette\Infrastructure\Repositories;

use Doctrine\DBAL\Connection;
use Tiquette\Domain\Ticket;
use Tiquette\Domain\TicketRepository;

class DbalTicketRepository implements TicketRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function save(Ticket $ticket): void
    {
        $data = [
            'event_name' => $ticket->getEventName(),
            'event_description' => $ticket->getEventDescription(),
            'event_date' => $ticket->getEventDate()->format('Y-m-d\TH:i:00'),
            'bought_at_price' => $ticket->getBoughtAtPrice(),
            'price_currency' => 'EUR',
        ];

        $this->connection->insert('tickets', $data);
    }
}
