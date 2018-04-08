<?php

/*
 * This file is part of Laravel Flash.
 *
 * (c) NeimarPerez <hello@.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NeimarPerez\Tests\Flash\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use NeimarPerez\Tests\Flash\AbstractTestCase;
use NeimarPerez\Flash\FlashNotifier;
use NeimarPerez\Flash\Facades\Flash;

/**
 * This is the facade test class.
 *
 * @author NeimarPerez <hello@.tech>
 */
class FlashTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'flash';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Flash::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return FlashNotifier::class;
    }
}
