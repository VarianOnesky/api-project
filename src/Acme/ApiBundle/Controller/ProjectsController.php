<?php

namespace Acme\ApiBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;

class ProjectsController implements ClassResourceInterface
{
    public function getAction($id)
    {
        return [
            'id' => $id
        ];
    }
}
