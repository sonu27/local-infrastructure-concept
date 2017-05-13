<?php
declare (strict_types=1);

namespace App\CommandHandler;

use App\Command\TestCommand;

class TestCommandHandler
{
    public function handle(TestCommand $command)
    {
        return $command->data;
    }
}
