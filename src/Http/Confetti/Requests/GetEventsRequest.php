<?php

namespace Karabin\Confetti\Http\Confetti\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetEventsRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(
        public array $params = []
    ) {

    }

    protected function defaultQuery(): array
    {
        return $this->params;
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/events';
    }
}
