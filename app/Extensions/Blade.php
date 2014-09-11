<?php
/**
 * Blade extension for Widgets
 * Create a folder named 'widgets' into your views directory
 * Use this extension by
 * @widget('NameOfYourWidget')
 */
Blade::extend(function( $view, $compiler )
{
    $pattern = '/(?<!\w)(\s*)@widget\(\'(.*)\)/';
    $replace = '$1<?php echo $__env->make(\'widgets.$2, array_except(get_defined_vars(), array(\'__data\', \'__path\')))->render(); ?>';
    return preg_replace($pattern, $replace, $view);
});

/**
 * Blade extension for Templates
 * Create a folder named 'templates' into your views directory
 * Use this extension by
 * @template('NameOfTheTemplate')
 */
Blade::extend(function( $view, $compiler )
{
    $pattern = '/(?<!\w)(\s*)@template\(\'(.*)\)/';
    $replace = '$1<?php echo $__env->make(\'templates.$2, array_except(get_defined_vars(), array(\'__data\', \'__path\')))->render(); ?>';
    return preg_replace($pattern, $replace, $view);
});

/**
 * Blade extension for Partials
 * Create a folder named 'partials' into your views directory
 * Use this extension by
 * @partial('NameOfTheTemplate')
 */
Blade::extend(function( $view, $compiler )
{
    $pattern = '/(?<!\w)(\s*)@partial\(\'(.*)\)/';
    $replace = '$1<?php echo $__env->make(\'partials.$2, array_except(get_defined_vars(), array(\'__data\', \'__path\')))->render(); ?>';
    return preg_replace($pattern, $replace, $view);
});