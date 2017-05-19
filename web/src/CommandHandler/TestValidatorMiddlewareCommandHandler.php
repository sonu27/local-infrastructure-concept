<?php
declare (strict_types=1);

namespace App\CommandHandler;

use App\Command\TestValidatorMiddlewareCommand;

class TestValidatorMiddlewareCommandHandler
{
    public function handle(TestValidatorMiddlewareCommand $command)
    {
        return $command;
    }
}
