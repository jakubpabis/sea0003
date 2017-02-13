<?php namespace Searchit\Jobs;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Searchit\Jobs\Components\Cronjob' => 'cronjob',
    		'Searchit\Jobs\Components\Filters' => 'jobFilters',
            'Searchit\Jobs\Components\JobsList' => 'jobsList',
            'Searchit\Jobs\Components\Sidebar' => 'sidebar',
            'Searchit\Jobs\Components\Form' => 'form',

    	];
    }

    public function registerSettings()
    {
    }
}
