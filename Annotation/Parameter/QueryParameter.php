<?php


namespace Creonit\RestBundle\Annotation\Parameter;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Annotation\Target({"METHOD"})
 */
class QueryParameter extends AbstractParameter
{
    public function __construct($data)
    {
        parent::__construct($data);
        $this->in = 'query';
    }
}