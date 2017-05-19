<?php
declare (strict_types=1);

namespace App\Tests\Functional;

class RequestValidatorTest extends WebTestCase
{
    /** @expectedException \League\Tactician\Bundle\Middleware\InvalidCommandException */
    public function testInvalidRequestReturnCorrectStatusCode(): void
    {
        $content = [
            'test' => null,
        ];

        $client = static::createClient();
        $client->request('POST', '/test/validator', [], [], [], json_encode($content));
    }
}
