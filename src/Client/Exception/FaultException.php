<?php

/**
 * @see       https://github.com/laminas/laminas-xmlrpc for the canonical source repository
 * @copyright https://github.com/laminas/laminas-xmlrpc/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-xmlrpc/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\XmlRpc\Client\Exception;

use Laminas\XmlRpc\Exception;

/**
 * Thrown by Laminas_XmlRpc_Client when an XML-RPC fault response is returned.
 *
 * @category   Laminas
 * @package    Laminas_XmlRpc
 * @subpackage Client
 */
class FaultException extends Exception\BadMethodCallException implements ExceptionInterface
{
}
