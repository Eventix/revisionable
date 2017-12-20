<?php

namespace Venturecraft\Revisionable\ExtraEvents;

use NeylsonGularte\EloquentExtraEvents\ExtraEventsTrait as BaseExtraEventsTrait;

trait ExtraEventsTrait {

    use BaseExtraEventsTrait;

    /**
     * Register a syncing model event with the dispatcher.
     *
     * @param  \Closure|string $callback
     * @param  int $priority
     * @return void
     */
    public static function syncing ($callback, $priority = 0) {
        static::registerModelEvent('syncing', $callback, $priority);
    }

    /**
     * Register a synced model event with the dispatcher.
     *
     * @param  \Closure|string $callback
     * @param  int $priority
     * @return void
     */
    public static function synced ($callback, $priority = 0) {
        static::registerModelEvent('synced', $callback, $priority);
    }

    /**
     * Register a attaching model event with the dispatcher.
     *
     * @param  \Closure|string $callback
     * @param  int $priority
     * @return void
     */
    public static function attaching ($callback, $priority = 0) {
        static::registerModelEvent('attaching', $callback, $priority);
    }

    /**
     * Register a attached model event with the dispatcher.
     *
     * @param  \Closure|string $callback
     * @param  int $priority
     * @return void
     */
    public static function attached ($callback, $priority = 0) {
        static::registerModelEvent('attached', $callback, $priority);
    }

    /**
     * Register a detaching model event with the dispatcher.
     *
     * @param  \Closure|string $callback
     * @param  int $priority
     * @return void
     */
    public static function detaching ($callback, $priority = 0) {
        static::registerModelEvent('detaching', $callback, $priority);
    }

    /**
     * Register a detached model event with the dispatcher.
     *
     * @param  \Closure|string $callback
     * @param  int $priority
     * @return void
     */
    public static function detached ($callback, $priority = 0) {
        static::registerModelEvent('detached', $callback, $priority);
    }
}
