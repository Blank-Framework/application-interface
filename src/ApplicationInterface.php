<?php

namespace BlankFramework\ApplicationInterface;

use Psr\Http\Message\RequestInterface;

interface ApplicationInterface
{
    public function run(RequestInterface $request): void;
}
