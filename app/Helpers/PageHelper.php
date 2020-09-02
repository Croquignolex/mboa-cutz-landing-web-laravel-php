<?php

if(!function_exists('page_title'))
{
    /**
     * Get page title with app name into it
     *
     * @param $page
     * @return string
     */
    function page_title($page)
    {
        $appName = config('app.name');
        return $page === '' ? $appName : "$page - $appName";
    }
}

if(!function_exists('seo_keywords'))
{
    /**
     * Get SEO keywords
     *
     * @return string
     */
    function seo_keywords()
    {
        return 'mboa,cutz,hair,men,baber';
    }
}

if(!function_exists('seo_description'))
{
    /**
     * Get SEO description
     *
     * @return string
     */
    function seo_description()
    {
        return 'Baber shop';
    }
}