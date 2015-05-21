<?php
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;

/**
 * PSR-7 request implementation.
 */
class Request implements RequestInterface
{
    use RequestTrait, MessageTrait;

    /**
     * @param null|string $method HTTP method for the request.
     * @param null|string $uri URI for the request.
     * @param array  $headers Headers for the message.
     * @param string|resource|StreamInterface $body Message body.
     * @param string $protocolVersion HTTP protocol version.
     *
     * @throws InvalidArgumentException for an invalid URI
     */
    public function __construct(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        $this->initialize($method, $uri, $headers, $body, $protocolVersion);
    }

}
