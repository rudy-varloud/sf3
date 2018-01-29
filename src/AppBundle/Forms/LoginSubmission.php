<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Forms;

use Symfony\Component\Validator\Constraints as Assert;

class LoginSubmission
{
    /** @Assert\NotBlank */
    public $username;

    /** @Assert\NotBlank */
    public $password;
}
