<?php

declare(strict_types=1);

namespace Untappd;

use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;

class Untappd extends Connector
{
    use AcceptsJson;

    public function __construct(
        protected string $token
    ) {
    }

    /**
     * Resolve the base URL of the service.
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.untappd.com/v4';
    }

    /**
     * Define default authentication method
     */
    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator($this->token);
    }
}
