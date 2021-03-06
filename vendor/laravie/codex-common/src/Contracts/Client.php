<?php

namespace Laravie\Codex\Contracts;

use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\ResponseInterface;

interface Client
{
    /**
     * Send the HTTP request.
     *
     * @param  string  $method
     * @param  \Laravie\Codex\Contracts\Endpoint  $uri
     * @param  array  $headers
     * @param  \Psr\Http\Message\StreamInterface|\Laravie\Codex\Common\Payload|array|null  $body
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(string $method, Endpoint $uri, array $headers = [], $body = []): ResponseInterface;

    /**
     * Stream (multipart) the HTTP request.
     *
     * @param  string  $method
     * @param  \Laravie\Codex\Contracts\Endpoint  $uri
     * @param  array  $headers
     * @param  \Psr\Http\Message\StreamInterface  $stream
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function stream(string $method, Endpoint $uri, array $headers, StreamInterface $stream): ResponseInterface;
}
