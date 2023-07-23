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

namespace PhpOffice\PhpSpreadsheet\Reader\Xls;

use PhpOffice\PhpSpreadsheet\Style\Conditional;

class ConditionalFormatting
{
    /**
     * @var array<int, string>
     */
    private static $types = [
        0x01 => Conditional::CONDITION_CELLIS,
        0x02 => Conditional::CONDITION_EXPRESSION,
    ];

    /**
     * @var array<int, string>
     */
    private static $operators = [
        0x00 => Conditional::OPERATOR_NONE,
        0x01 => Conditional::OPERATOR_BETWEEN,
        0x02 => Conditional::OPERATOR_NOTBETWEEN,
        0x03 => Conditional::OPERATOR_EQUAL,
        0x04 => Conditional::OPERATOR_NOTEQUAL,
        0x05 => Conditional::OPERATOR_GREATERTHAN,
        0x06 => Conditional::OPERATOR_LESSTHAN,
        0x07 => Conditional::OPERATOR_GREATERTHANOREQUAL,
        0x08 => Conditional::OPERATOR_LESSTHANOREQUAL,
    ];

    public static function type(int $type): ?string
    {
        if (isset(self::$types[$type])) {
            return self::$types[$type];
        }

        return null;
    }

    public static function operator(int $operator): ?string
    {
        if (isset(self::$operators[$operator])) {
            return self::$operators[$operator];
        }

        return null;
    }
}