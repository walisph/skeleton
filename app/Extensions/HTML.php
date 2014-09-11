<?php

HTML::macro('meta', function($attr = [], $content = null)
{
    // Basic Meta Tags
    $HtmlBuilder = new Illuminate\Html\HtmlBuilder;
    if( !is_array($attr) && !is_null($content) )
    {
        return '<meta name="'. $attr .'" content="'. $content .'" />'. PHP_EOL;
    }
    else
    {
        return '<meta'. $HtmlBuilder->attributes($attr) .' />'. PHP_EOL;
    }

});

HTML::macro('meta_facebook', function($property, $content)
{
    // Facebook Open Graph Meta Tags
    return '<meta property="og:'. $property .'" content="'. $content .'" />'. PHP_EOL;
});

HTML::macro('meta_twitter', function($property, $content)
{
    // Twitter Meta Tags
    return '<meta name="twitter:'. $property .'" content="'. $content .'" />'. PHP_EOL;
});