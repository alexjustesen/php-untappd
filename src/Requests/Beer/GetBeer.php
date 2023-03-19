<?php

declare(strict_types=1);

namespace Untappd\Requests\Beer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBeer extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $beerId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/beer/info/'.$this->beerId;
    }

    protected function defaultQuery(): array
    {
        return [
            'compact' => 'true',
        ];
    }
}
