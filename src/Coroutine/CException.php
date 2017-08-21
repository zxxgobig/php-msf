<?php
/**
 * Exception
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\MSF\Coroutine;

use Exception;

class CException extends Exception
{
    /**
     * @return string 获取前一个异常Message
     */
    public function getPreviousMessage()
    {
        return $this->getPrevious()->getMessage();
    }

    /**
     * Exception constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
