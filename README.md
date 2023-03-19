# Untappd SDK (PHP)

Unofficial PHP SDK for [Untappd](https://untappd.com/api) API.

## Sponsor

Like this package? Consider [sponsoring](https://github.com/sponsors/alexjustesen) me to help me reach my goals.

## Install

```
composer require alexjustesen/php-untappd
```

### Usage

#### Authentication

The Untappd API makes use of token based authentication, you can either generate a token using your client ID and secret or using the SSO user's token.

#### Initialize the request

To get started create a new instance of the SDK.

```php
$untappd = new Untappd();

```

#### Handling the response

The SDK makes use of [Saloon](https://docs.saloon.dev/) by Sam Carre, after a request is sent you can interact with the response with any of the [documented](https://docs.saloon.dev/the-basics/responses) methods like `->body()` or `->json()`.

... endpoints tbd...

## Testing

### Using PHP CS Fixer

```
composer fix-code
```

### Using Pest
```
composer test
```
