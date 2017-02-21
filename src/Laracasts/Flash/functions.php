<?php

if ( ! function_exists('flash')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @param  string      $level
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flash($message = null, $level = 'info')
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, $level);
        }

        return $notifier;
    }
}

if ( ! function_exists('flashInfo')) {

    /**
     * Arrange for an info flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashInfo($message = null)
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, 'info');
        }

        return $notifier;
    }
}


if ( ! function_exists('flashSuccess')) {

    /**
     * Arrange for a success flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashSuccess($message = null)
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, 'success');
        }

        return $notifier;
    }
}

if ( ! function_exists('flashWarning')) {

    /**
     * Arrange for a warning flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashWarning($message = null)
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, 'warning');
        }

        return $notifier;
    }
}

if ( ! function_exists('flashDanger')) {

    /**
     * Arrange for a danger flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashDanger($message = null)
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, 'danger');
        }

        return $notifier;
    }
}