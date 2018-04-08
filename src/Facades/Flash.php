<?php

/*
 * This file is part of Laravel Flash.
 *
 * (c) NeimarPerez <hello@NeimarPerez.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NeimarPerez\Flash\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Flash.
 *
 * @author NeimarPerez <hello@NeimarPerez.tech>
 */
class Flash extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flash';
    }
}
