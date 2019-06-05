<?php
declare(strict_types=1);

/**
 * This file is part of the PHPMongo package.
 *
 * (c) Dmytro Sokil <dmytro.sokil@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sokil\Mongo\Cache\Exception;

use Sokil\Mongo\Exception;

class InvalidArgumentException extends Exception
    implements \Psr\SimpleCache\InvalidArgumentException
{

}
