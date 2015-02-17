<?php
/**
 * This file is part of the BEAR.AppMeta
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\AppMeta;

abstract class AbstractAppMeta
{
    /**
     * Application name "{Vendor}\{Package}"
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $appDir;

    /**
     * @var string
     */
    public $tmpDir;

    /**
     * @var string
     */
    public $logDir;
}