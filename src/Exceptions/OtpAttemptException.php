<?php

namespace BenBjurstrom\Otpz\Exceptions;

use Exception;

class OtpAttemptException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}
