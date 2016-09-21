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

namespace Vain\Memcache\Memcached\Factory;

use Vain\Connection\Exception\NoRequiredFieldException;
use Vain\Connection\Factory\AbstractConnectionFactory;

/**
 * Class MemcachedConnectionFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class MemcachedConnectionFactory extends AbstractConnectionFactory
{
    /**
     * @param array $config
     *
     * @return array
     *
     * @throws NoRequiredFieldException
     */
    protected function getCredentials(array $config) : array
    {
        foreach (['host', 'port'] as $requiredField) {
            if (false === array_key_exists($requiredField, $config)) {
                throw new NoRequiredFieldException($this, $requiredField);
            }
        }

        return [$config['host'], $config['port']];
    }

    /**
     * @inheritDoc
     */
    public function createConnection(array $config)
    {
        list ($host, $port) = $this->getCredentials($config);

        $memcached = new \Memcached;
        $memcached->addServer($host, $port);

        return $memcached;
    }
}