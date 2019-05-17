<?php

namespace Appwilio\CdekSDK\Requests;


use Appwilio\CdekSDK\Contracts\ParamRequest;
use Appwilio\CdekSDK\Requests\Concerns\RequestCore;

class CityListRequest implements ParamRequest
{

    use RequestCore;

    protected const METHOD = 'GET';

    protected const ADDRESS = 'v1/location/cities/json';

    /** @var int */
    private $page;

    /** @var int */
    private $size;

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): CityListRequest
    {
        $this->page = $page;
        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): CityListRequest
    {
        $this->size = $size;
        return $this;
    }

    public function getParams(): array
    {
        return [
            'page' => $this->page,
            'size' => $this->size
        ];
    }
}