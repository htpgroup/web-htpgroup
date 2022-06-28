<?php

namespace App\Services\OmiPayVA;

use App\Services\OmiPayVA\Exceptions\FailedActionException;
use App\Services\OmiPayVA\Exceptions\NotFoundException;
use App\Services\OmiPayVA\Exceptions\TimeOutException;
use App\Services\OmiPayVA\Exceptions\ValidationException;
use Barryvdh\Debugbar\Facades\Debugbar;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

trait MakesHttpRequests
{
    protected function get(string $uri)
    {
        return $this->request('GET', $uri);
    }

    protected function post(string $uri, array $payload = [])
    {
        return $this->request('POST', $uri, $payload);
    }

    protected function put(string $uri, array $payload = [])
    {
        return $this->request('PUT', $uri, $payload);
    }

    protected function delete(string $uri, array $payload = [])
    {
        return $this->request('DELETE', $uri, $payload);
    }

    protected function request(string $verb, string $uri, array $payload = [])
    {
        //dd($payload);
        //dd($uri);
        //Update uri
        $uri = 'OmiPayAPI?fnc='.$uri;
        Debugbar::addMessage('API Call: Method: '.$verb.' '.$uri, 'omipay_api');
        try {
            $response = $this->client->request(
                $verb,
                $uri,
                empty($payload) ? [] : ['form_params' => $payload]
            );
        } catch (GuzzleException $e) {
            // Handle excpetion
            throw new TimeOutException();
        }

        // dd( (string)$response->getBody());
        //dd( $response->getEffectiveUrl());
        // dd(  $this->client);

        if (! $this->isSuccessful($response)) {
            return $this->handleRequestError($response);
        }

        $responseBody = (string) $response->getBody();
        $dataResponse = json_decode($responseBody, true);

        //dd($dataResponse);
        //215301 Merchant Empty

        $arrCodeError = [0, 1, 3, 104, 206300, 206301, 215301, 214301];
        if (isset($dataResponse['error_code']) && ! in_array($dataResponse['error_code'], $arrCodeError)) {
            return $this->handleRequestError($response);
        }

        $responseBodyData = json_decode($responseBody, true) ?: $responseBody;
        if ($dataResponse['error_code'] == 3) {
            $responseBodyData['data'] = [];
        }

        //dd($responseBodyData);

        return $responseBodyData;
    }

    public function isSuccessful($response): bool
    {
        if (! $response) {
            return false;
        }

        return (int) substr($response->getStatusCode(), 0, 1) === 2;
    }

    protected function handleRequestError(ResponseInterface $response): void
    {
        if ($response->getStatusCode() === 422) {
            throw new ValidationException(json_decode((string) $response->getBody(), true));
        }

        if ($response->getStatusCode() === 404) {
            throw new NotFoundException();
        }

        if ($response->getStatusCode() === 400) {
            throw new FailedActionException((string) $response->getBody());
        }

        //dd($response);

        throw new Exception((string) $response->getBody());
    }
}
