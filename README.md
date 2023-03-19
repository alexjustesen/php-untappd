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

Fathom Analytics makes use of token based authentication. You'll want to visit https://app.usefathom.com/api to generate a unique token for your application.

With the token you can then pass it into the connector to authenticate all your API calls.

#### Initialize the request

To get started create a new instance of the SDK.

```php
$fathom = new FathomAnalytics('fathom-token');

```

#### Handling the response

The SDK makes use of [Saloon](https://docs.saloon.dev/) by Sam Carre, after a request is sent you can interact with the response with any of the [documented](https://docs.saloon.dev/the-basics/responses) methods like `->body()` or `->json()`.

In the example below we're requesting a single site and formatting the response as json.

```php
$request = new GetSite('SITEID');

$response = $fathom->send($request);

$response->json();
```

#### Get account

Get the account of the token holder.

```php
$request = new GetAccountRequest;

$response = $fathom->send($request);

$response->json();
```

#### List sites

```php
$request = new ListSitesRequest;

$response = $fathom->send($request);

$response->json();
```

#### Get site

```php
$request = new GetSite('SITEID');

$response = $fathom->send($request);

$response->json();
```

#### Get site's current visitors

```php
$request = new GetSiteCurrentVisitorsRequest($siteId);

$response = $fathom->send($request);

$response->json();
```

#### Get aggregations

Using Saloon's [query params](https://docs.saloon.dev/the-basics/query-parameters) you can build any aggregation request. For a full list of available aggregations checkout the Fathom Analytics [docs](https://usefathom.com/api#aggregation).

```php
$request = new GetAggregationsRequest('pageview', $entityId, 'pageviews');

$request->query()->add('date_grouping', 'day');
$request->query()->add('date_from', today()->subDays(30)->toDateTimeString());
$request->query()->add('date_to', today()->toDateTimeString());
$request->query()->add('sort_by', 'timestamp:desc');

$response = $fathom->send($request);

$response->json();
```

## Testing

### Using PHP CS Fixer

```
composer fix-code
```

### Using Pest
```
composer test
```
