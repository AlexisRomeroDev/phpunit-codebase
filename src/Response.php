<?php

namespace App;

class Response
{

    protected string $content = '';
    protected array $headers = [];
    protected int $statusCode = 200;


    public function __construct($content, $headers, $statusCode)
    {
        $this->content = $content;
        $this->headers = $headers;
        $this->statusCode = $statusCode;
    }

    public function send()
    {
        http_response_code($this->statusCode);
        foreach ($this->headers as $header){
            header($header);
        }
        echo $this->content;

    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }



}