<?php


namespace Application\Configuration;

use Swift\Framework\Annotation\Configuration;

/**
 * @Configuration(lazy=false)
 */
class EnvConfiguration
{

    public function __construct()
    {
        $this->setupEnvironment();
    }

    /**
     * 设置环境
     */
    private function setupEnvironment()
    {
        define('TEMP_ROOT', ROOT_DIR . '/temp');
        define('LOG_ROOT', ROOT_DIR . '/log');
        define('PUBLIC_ROOT', ROOT_DIR . '/public');

        date_default_timezone_set('Asia/Shanghai');

        // PHP ini
        ini_set('display_errors', 1);
        ini_set('error_reporting', E_ALL);
    }
}
