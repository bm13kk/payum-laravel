<?php
/**
 * @todo upload from /conf/folder
 * @todo replace all mine changes laravel/bootstrap/* var/www/index
 */

namespace bm13kk;


class Bootstrap {
    protected static $root;

    protected static $folders = [
        'app'       => '/app',
        //laravel same
        'vendor'    => '/var/vendor',
        //laravel /vendor
        'web'       => '/var/www',
        //laravel /public
        //symfony /web
        'bootstrap' => '/app/bootstrap',
        //laravel /bootstrap
    ];

    public function __construct()
    {
        if (!self::$root) {
            self::$root = __DIR__ . '/..';
            //laravel /laravel
        }
    }

    function get_dir($dirName)
    {
        if (!in_array($dirName, $this->folders)) {
            throw new \InvalidArgumentException('There is no folder with this name.');
        }

        return $this->root . $this->folders[$dirName];
    }
} 