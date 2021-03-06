<?php

namespace Phpsx\Website\Application;

use PSX\Framework\Controller\ControllerAbstract;
use PSX\Http\RequestInterface;
use PSX\Http\ResponseInterface;

class Disclosure extends ControllerAbstract
{
    public function onGet(RequestInterface $request, ResponseInterface $response)
    {
        $response->setHeader('Content-Type', 'application/atom+xml');
        $response->getBody()->write(file_get_contents($this->config['disclosure_file']));
    }
}
