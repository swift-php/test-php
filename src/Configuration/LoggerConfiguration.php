<?php


namespace Application\Configuration;


use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Swift\Framework\Annotation\Configuration;
use Swift\Framework\Annotation\Injectable;
use Swift\Framework\Annotation\Value;
use Swift\Framework\Logger\LoggerFactory;

/**
 * @Configuration()
 */
class LoggerConfiguration
{

    /**
     * @var
     * @Value("${app.key4}")
     */
    public $key;
    /**
     * @return Logger
     * @throws
     * @Injectable(name="logger")
     */
    public function getLogger(): LoggerInterface
    {
        $this->key;
        return LoggerFactory::getInstance()->getLogger('app');
    }
}
