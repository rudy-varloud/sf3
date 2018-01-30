<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Tiquette\Infrastructure\Repositories;

use Doctrine\DBAL\Connection;
use Tiquette\Domain\Account;
use Tiquette\Domain\AccountRepository;
use Tiquette\Domain\Ticket;
use Tiquette\Domain\TicketRepository;

class DbalAccountRepository implements AccountRepository
{
    private $connection;

    public  function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function save(Account $account): void
    {
        $data = [
            'event_name' => $account->getEventName(),
            'event_description' => $account->getEventDescription(),
            'event_date' => $account->getEventDate()->format('Y-m-d\TH:i:00'),
            'bought_at_price' => $account->getBoughtAtPrice(),
            'price_currency' => 'EUR',
        ];

        $this->connection->insert('account', $data);
    }
}
