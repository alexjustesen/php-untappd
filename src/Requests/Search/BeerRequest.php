<?php

declare(strict_types=1);

namespace Untappd\Requests\Search;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class BeerRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $search,
        protected int $limit = 25,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/search/beer';
    }

    protected function defaultQuery(): array
    {
        return [
            'q' => urlencode($this->search),
            'limit' => $this->limit,
        ];
    }
}
