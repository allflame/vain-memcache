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

use Vain\Cache\CacheInterface;
use Vain\Cache\Factory\AbstractCacheFactory;
use Vain\Memcache\Memcached\Memcached;

/**
 * Class MemcachedCacheFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class MemcachedCacheFactory extends AbstractCacheFactory
{
    /**
     * @inheritDoc
     */
    public function createCache(array $configData, $connection) : CacheInterface
    {
        return new Memcached($connection);
    }
}