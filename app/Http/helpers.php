<?php

function disableHrefIfActive($lang)
{
    return config()->get('app.locale') == $lang ? 'javascript:void(0)' : route('change-lang', $lang);
}

function giveActiveClass($lang)
{
    return config()->get('app.locale') == $lang ? 'active' : '';
}

function activeClassBasedOnRoute(string $route)
{
    return request()->route()->getName() == $route ? 'active' : '';
}

function activeClassBasedOnRouteSegment(string $segment)
{
    return Request::segment(1) == $segment ? 'active' : '';
}

function routeOrAnchor(string $route, string $anchor)
{
    return request()->route()->getName() == $route ? $anchor : route($route) . $anchor;
}