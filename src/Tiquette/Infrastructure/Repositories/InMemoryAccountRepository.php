<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Tiquette\Infrastructure\Repositories;

use Tiquette\Domain\Account;
use Tiquette\Domain\AccountRepository;
use Tiquette\Domain\Ticket;
use Tiquette\Domain\TicketRepository;

class InMemoryAccountRepository implements AccountRepository
{
    private $account = [];

    public function save(Account $account): void
    {
        $this->account[] = $account;
    }
}
