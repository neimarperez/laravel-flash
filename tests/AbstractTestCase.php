<?php

/*
 * This file is part of Laravel Flash.
 *
 * (c) NeimarPerez <hello@.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NeimarPerez\Tests\Flash;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author NeimarPerez <hello@.tech>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return \NeimarPerez\Flash\ServiceProvider::class;
    }
}
