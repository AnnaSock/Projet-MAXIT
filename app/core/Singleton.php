<?php
namespace Aks\App\Core;

class Singleton {
    protected static ?self $instance = null;

    protected function __construct() {}

    public static function getInstance(): static {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}