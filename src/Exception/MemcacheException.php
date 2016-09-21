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
use Vain\Core\Exception\AbstractCoreException;

/**
 * Class MemcachedException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class MemcacheException extends AbstractCoreException
{
    /**
     * MemcacheException constructor.
     *
     * @param MemcacheInterface $cache
     * @param string            $message
     * @param int               $code
     * @param \Exception        $previous
     */
    public function __construct(MemcacheInterface $cache, string $message, int $code, \Exception $previous = null)
    {
        parent::__construct($cache, $message, $code, $previous);
    }
}