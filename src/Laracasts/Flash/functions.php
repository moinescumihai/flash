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
        return flash($message, 'info');
    }
}


if ( ! function_exists('flashSuccess')) {

    /**
     * Arrange for an success flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashSuccess($message = null)
    {
        return flash($message, 'success');
    }
}

if ( ! function_exists('flashWarning')) {

    /**
     * Arrange for an success flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashWarning($message = null)
    {
        return flash($message, 'warning');
    }
}

if ( ! function_exists('flashDanger')) {

    /**
     * Arrange for an success flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashDanger($message = null)
    {
        return flash($message, 'danger');
    }
}