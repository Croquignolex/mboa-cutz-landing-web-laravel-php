<?php

if(!function_exists('css_asset'))
{
    /**
     * @param $css_file
     * @return string
     */
    function css_asset($css_file)
    {
        return env('PUBLIC_FOLDER') . '/assets/css/' . $css_file . '.css';
    }
}

if(!function_exists('js_asset'))
{
    /**
     * @param $js_file
     * @return string
     */
    function js_asset($js_file)
    {
        return  env('PUBLIC_FOLDER') . '/assets/js/' . $js_file . '.js';
    }
}

if(!function_exists('img_asset'))
{
    /**
     * @param $img_file
     * @param $extension
     * @return string
     */
    function img_asset($img_file, $extension = 'png')
    {
        return env('PUBLIC_FOLDER') . '/assets/img/' . $img_file . '.' . $extension;
    }
}

if(!function_exists('favicon_img_asset'))
{
    /**
     * @param $favicon
     * @return string
     */
    function favicon_img_asset($favicon)
    {
        return env('PUBLIC_FOLDER') . '/assets/img/favicons/' . $favicon . '.png';
    }
}

if(!function_exists('favicon_file_asset'))
{
    /**
     * @param $file
     * @param string $extension
     * @return string
     */
    function favicon_file_asset($file, $extension = 'json')
    {
        return env('PUBLIC_FOLDER') . '/assets/img/favicons/' . $file . '.' . $extension;
    }
}

if(!function_exists('flag_img_asset'))
{
    /**
     * @param $flag
     * @return string
     */
    function flag_img_asset($flag)
    {
        return env('PUBLIC_FOLDER') . '/assets/img/flags/' . $flag . '.png';
    }
}