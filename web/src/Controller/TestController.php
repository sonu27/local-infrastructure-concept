<?php
declare (strict_types=1);

namespace App\Controller;

use App\Command\TestValidatorMiddlewareCommand;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function validatorAction()
    {
        $command = new TestValidatorMiddlewareCommand();

        $data = $this->commandBus->handle($command);

        return new Response($data->test);
    }
}
