<?php

/**
 * D2dSoft
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL v3.0) that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL: https://d2d-soft.com/license/AFL.txt
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this extension/plugin/module to newer version in the future.
 *
 * @author     D2dSoft Developers <developer@d2d-soft.com>
 * @copyright  Copyright (c) 2021 D2dSoft (https://d2d-soft.com)
 * @license    https://d2d-soft.com/license/AFL.txt
 */

namespace Complex;

include(__DIR__ . '/../vendor/autoload.php');

echo 'Function Examples', PHP_EOL;

$functions = array(
    'abs',
    'acos',
    'acosh',
    'acsc',
    'acsch',
    'argument',
    'asec',
    'asech',
    'asin',
    'asinh',
    'conjugate',
    'cos',
    'cosh',
    'csc',
    'csch',
    'exp',
    'inverse',
    'ln',
    'log2',
    'log10',
    'rho',
    'sec',
    'sech',
    'sin',
    'sinh',
    'sqrt',
    'theta'
);

for ($real = -3.5; $real <= 3.5; $real += 0.5) {
    for ($imaginary = -3.5; $imaginary <= 3.5; $imaginary += 0.5) {
        foreach ($functions as $function) {
            $complexFunction = __NAMESPACE__ . '\\Functions::' . $function;
            $complex = new Complex($real, $imaginary);
            try {
                echo $function, '(', $complex, ') = ', $complexFunction($complex), PHP_EOL;
            } catch (\Exception $e) {
                echo $function, '(', $complex, ') ERROR: ', $e->getMessage(), PHP_EOL;
            }
        }
        echo PHP_EOL;
    }
}