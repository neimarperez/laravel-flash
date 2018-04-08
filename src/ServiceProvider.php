<?php

/*
 * This file is part of Laravel Flash.
 *
 * (c) NeimarPerez <hello@.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NeimarPerez\Flash;

/**
 * Class ServiceProvider.
 *
 * @author NeimarPerez <hello@.tech>
 */
class ServiceProvider extends \NeimarPerez\ServiceProvider\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishConfig();

        $this->publishViews();

        $this->loadViews();

        $this->mergeConfig();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('flash', function () {
            return $this->app->make(FlashNotifier::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['flash']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'flash';
    }
}
