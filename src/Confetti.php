<?php

namespace Karabin\Confetti;

use Karabin\Confetti\Http\Confetti\ConfettiApi;
use Karabin\Confetti\Http\Confetti\Requests\GetEventRequest;
use Karabin\Confetti\Http\Confetti\Requests\GetEventsRequest;

class Confetti
{
    public function getEvents(array $params = []): array
    {
        $connector = new ConfettiApi(config('confetti.token'));
        $request = new GetEventsRequest(params: $params);
        $response = $connector->send($request)->throw();

        return $response->json('data');

    }

    public function getOpenEvents(array $params = []): array
    {
        $connector = new ConfettiApi(config('confetti.token'));
        $request = new GetEventsRequest(params: $params);
        $response = $connector->send($request)->throw();

        return collect($response->json('data'))->filter(function ($item) {
            return $item['attributes']['status'] === 'open';
        })->values()->toArray();
    }

    public function getEvent(int $id, array $params = [])
    {
        $connector = new ConfettiApi(config('confetti.token'));
        $request = new GetEventRequest(id: $id, params: $params);
        $response = $connector->send($request)->throw();

        return $response->json('data');
    }
}
