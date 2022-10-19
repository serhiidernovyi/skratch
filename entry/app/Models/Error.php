<?php

declare(strict_types=1);

namespace App\Models;

use UseCases\Contracts\ResponseObjects\IError;

class Error implements IError
{
    public string $message;

    public function getMessage()
    {
        return $this->message;
    }
}
