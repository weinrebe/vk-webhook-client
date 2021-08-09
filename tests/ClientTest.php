<?php

namespace Weinrebe\VkWebhook\Test;

use Weinrebe\VkWebhook\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    protected Client $client;

    protected function setUp(): void
    {
        $this->client = new Client();
    }


    public function testConstruct()
    {
        $this->assertInstanceOf('Weinrebe\VkWebhook\Client', $this->client);
    }


}
