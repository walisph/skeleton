<?php

if ( ! function_exists('extension_path'))
{
    /**
     * Get the path to the application folder.
     *
     * @param   string  $path
     * @return  string
     */
    function extension_path($path = '')
    {
        return app('path.extensions').($path ? '/'.$path : $path);
    }
}

if ( ! function_exists('minified'))
{
    function minified()
    {
        return ( ! \Config::get('app.debug') || ! \App::environment('production') ) ? 'min.' : '';
    }
}

if ( ! function_exists('assets_path'))
{
    /**
     * Get the path to the application folder.
     *
     * @param   string  $path
     * @return  string
     */
    function assets_path($path = '')
    {
        return app('path.assets').($path ? '/'.$path : $path);
    }
}