<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-cache
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-cache
 */
declare(strict_types=1);

namespace Vain\Memcache\Exception;

use Vain\Memcache\MemcacheInterface;

/**
 * Class BadMethodMemcachedException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class BadMethodMemcacheException extends MemcacheException
{
    /**
     * BadMethodMemcachedException constructor.
     *
     * @param MemcacheInterface $cache
     * @param string            $method
     */
    public function __construct(MemcacheInterface $cache, string $method)
    {
        parent::__construct($cache, sprintf('Method %s is not supported', $method), 0, null);
    }
}