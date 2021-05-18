<?php namespace OnlineStore\Schema;

use Backend;
use System\Classes\PluginBase;

/**
 * Schema Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Schema',
            'description' => 'No description provided yet...',
            'author'      => 'OnlineStore',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'OnlineStore\Schema\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'onlinestore.schema.some_permission' => [
                'tab' => 'Schema',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerSettings
     */
    public function registerSettings()
    {
        return [
            'templates' => [
                'label'       => 'Шаблоны',
                'description' => '',
                'icon'        => 'icon-folder',
                'url'         => Backend::url('onlinestore/schema/schemas'),
                'order'       => 1,
                'category'    => 'schema',
                'permissions' => ['onlinestore.schema.*']
            ],
        ];
    }
}
