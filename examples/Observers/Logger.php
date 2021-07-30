<?php


namespace Weinrebe\VkWebhook\Examples\Observers;


use SplObserver;
use SplSubject;

class Logger implements SplObserver
{
    private string $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function update(SplSubject $subject, string $event = null, $data = null): void
    {
        $entry = date('Y-m-d H:i:s') . ': Event: '.$event.'; Data: '. $data . PHP_EOL;
        file_put_contents($this->filename, $entry, FILE_APPEND);
    }
}