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
declare(strict_types = 1);

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
    private $memcache;

    /**
     * MemcacheException constructor.
     *
     * @param MemcacheInterface $memcache
     * @param string            $message
     * @param int               $code
     * @param \Exception        $previous
     */
    public function __construct(
        MemcacheInterface $memcache,
        string $message,
        int $code = 500,
        \Exception $previous = null
    ) {
        $this->memcache = $memcache;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return MemcacheInterface
     */
    public function getMemcache(): MemcacheInterface
    {
        return $this->memcache;
    }
}
