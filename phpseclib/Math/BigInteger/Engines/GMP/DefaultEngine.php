<?php

/**
 * GMP Modular Exponentiation Engine
 *
 * PHP version 5 and 7
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */

// declare(strict_types=1);

namespace phpseclib3\Math\BigInteger\Engines\GMP;

use phpseclib3\Math\BigInteger\Engines\GMP;

/**
 * GMP Modular Exponentiation Engine
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class DefaultEngine extends GMP
{
    /**
     * Performs modular exponentiation.
     */
    protected static function powModHelper(GMP $x, GMP $e, GMP $n): GMP
    {
        $temp = new GMP();
        $temp->value = gmp_powm($x->value, $e->value, $n->value);

        return $x->normalize($temp);
    }
}
