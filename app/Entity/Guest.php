<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

class Guest
{
    private $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        $validator = Validation::createValidator();
        $violations = $validator->validate($this->name, [
            new Length(["max" => 15]),
            new NotBlank(),
        ]);
        if ($violations->count()) {
            return false;
        }
        return true;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
