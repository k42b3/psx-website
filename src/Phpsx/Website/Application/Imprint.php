<?php

namespace Phpsx\Website\Application;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\RequestInterface;
use PSX\Http\ResponseInterface;

class Imprint extends ViewAbstract
{
    public function onGet(RequestInterface $request, ResponseInterface $response)
    {
        $this->render($response, __DIR__ . '/../Resource/imprint.html', []);
    }
}
