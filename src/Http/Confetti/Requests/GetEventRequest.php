<?php

namespace Karabin\Confetti\Http\Confetti\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetEventRequest extends Request
{
    public function __construct(
        public int $id,
        public array $params = []
    ) {
    }

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    protected function defaultQuery(): array
    {
        return $this->params;
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/events/'.$this->id;
    }
}
