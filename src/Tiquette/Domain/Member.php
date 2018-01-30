<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Tiquette\Domain;

use Tiquette\Utils\Ensure;

class Member
{
    private $email;
    private $nickname;
    private $encodedPassword;

    public static function signUp(Email $email, string $nickname, EncodedPassword $encodedPassword): self
    {
        return new self($email, $nickname, $encodedPassword);
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getEncodedPassword(): EncodedPassword
    {
        return $this->encodedPassword;
    }

    private function __construct(Email $email, string $nickname, EncodedPassword $encodedPassword)
    {
        Ensure::string($nickname);
        Ensure::minLength($nickname, 1);

        $this->email = $email;
        $this->nickname = $nickname;
        $this->encodedPassword = $encodedPassword;
    }


    /**
     * This method should be used only to hydrate object from a persistent storage
     * and never to create / sign up a Member.
     */
    public static function fromArray(array $data): self
    {
        return new self(
            new Email($data['email']),
            $data['nickname'],
            new EncodedPassword($data['encoded_password'], $data['password_salt'])
        );
    }
}
