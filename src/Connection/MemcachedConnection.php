<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-memcache
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-memcache
 */

namespace Vain\Memcache\Connection;

use Vain\Connection\AbstractConnection;

/**
 * Class MemcachedConnection
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class MemcachedConnection extends AbstractConnection
{
    /**
     * @param array $config
     *
     * @return array
     */
    protected function getCredentials(array $config) : array
    {
        return [$config['host'], $config['port']];
    }

    /**
     * @inheritDoc
     */
    public function doConnect(array $configData)
    {
        list ($host, $port) = $this->getCredentials($configData);

        $memcached = new \Memcached;
        $memcached->addServer($host, $port);

        return $memcached;
    }
}