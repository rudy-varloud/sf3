<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Forms;

use Symfony\Component\Validator\Constraints as Assert;

class TicketSubmission
{
    public $eventName;
    public $eventDate;
    public $eventDescription;
}
