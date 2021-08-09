<?php


namespace Weinrebe\VkWebhook;


use JsonException;
use SplObserver;
use SplSubject;

class Client implements SplSubject
{

    private array $observers = [];

    public function __construct()
    {
        $this->observers[EventList::ALL] = [];
    }

    private function initEventGroup(string $event = EventList::ALL): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = EventList::ALL): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers[EventList::ALL];

        return array_merge($group, $all);
    }

    public function attach(SplObserver $observer, string $event = EventList::ALL): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = EventList::ALL): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = EventList::ALL, $data = null): void
    {
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($this, $event, $data);
        }
    }

    public function initialize(): void
    {
        $data = file_get_contents('php://input');
        $this->notify(EventList::INIT, $data);
        $this->notify($this->getEventType($data), $data);

    }

    private function getEventType(string $data): string
    {
        try {
            $event = json_decode($data, false, 512, JSON_THROW_ON_ERROR);
            return $event->type ?? EventList::UNKNOWN;
        } catch (JsonException $e) {
            return EventList::ERROR_JSON;
        }

    }

}