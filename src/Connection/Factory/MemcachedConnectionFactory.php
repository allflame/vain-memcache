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

namespace Vain\Memcache\Connection\Factory;

use Vain\Core\Connection\ConnectionInterface;
use Vain\Core\Connection\Factory\AbstractConnectionFactory;
use Vain\Memcache\Connection\MemcachedConnection;

/**
 * Class MemcachedConnectionFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class MemcachedConnectionFactory extends AbstractConnectionFactory
{
    /**
     * @inheritDoc
     */
    public function createConnection(array $config) : ConnectionInterface
    {
        return new MemcachedConnection($config);
    }
}
