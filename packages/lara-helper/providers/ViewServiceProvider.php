<?php

namespace BCGen\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    protected $namespace = 'views';
    protected $base_path = 'vendor\\bcgen\\lara-helper\\views';

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->addNamespace($this->namespace, base_path($this->base_path));

        $this->setBladeAliases('component', [
            'app',
            'frontend',
            'quasar',
        ], 'layouts');
    }

    protected function setBladeAliases($functionName, $components, $prefix = null)
    {
        $prefix = $prefix ? $prefix . '.' : '';

        foreach ($components as $component) {
            Blade::$functionName("$this->namespace::$prefix$component");
        }
    }
}
