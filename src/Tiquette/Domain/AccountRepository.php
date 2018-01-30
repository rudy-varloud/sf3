<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/29/18
 * Time: 9:13 AM
 */

namespace Tiquette\Domain;


interface AccountRepository
{
    public function save(Account $account): void;
}