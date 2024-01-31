<?php

namespace Karabin\Confetti\Http\Confetti;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class ConfettiApi extends Connector
{
    use AcceptsJson;

    public function __construct(string $token)
    {
        $this->withTokenAuth($token, 'apikey');
    }

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.confetti.events';
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Default HTTP client options
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
