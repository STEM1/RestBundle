<?php


namespace Creonit\RestBundle\Swagger\Spec;


class ApiServer
{
    protected $url = '/';

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }
}