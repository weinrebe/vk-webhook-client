<?php


namespace Weinrebe\VkWebhook\Examples\Observers;


use SplObserver;
use SplSubject;

class Confirmation implements SplObserver
{
    private string $confirmation;

    public function __construct(string $confirmation)
    {
        $this->confirmation = $confirmation;
    }

    public function update(SplSubject $subject, string $event = null, $data = null)
    {
        echo $this->confirmation;
    }
}