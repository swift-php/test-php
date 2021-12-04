<?php


namespace Application\Configuration;


use Swift\Framework\Annotation\Configuration;
use Swift\Framework\Annotation\Injectable;
use Swift\Framework\Annotation\Value;

/**
 * @Configuration()
 */
class RestClientConfiguration
{
    /**
     * @var array
     * @Value("${services.main}")
     */
    private array $mainOptions;

    /**
     * @Injectable(name="mainServiceClient")
     */
    public function mainServiceClient()
    {
        return $this->mainOptions;
    }
}
