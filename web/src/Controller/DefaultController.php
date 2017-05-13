<?php
declare (strict_types=1);

namespace App\Controller;

use App\Command\TestCommand;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function indexAction()
    {
        $command = new TestCommand();
        $command->data = random_int(0, 100);

        $data = $this->commandBus->handle($command);

        return new Response($data);
    }
}
