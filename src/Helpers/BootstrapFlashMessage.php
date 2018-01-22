<?php

namespace AndreLohmann\BootstrapFlashMessage;

use SilverStripe\Control\Controller;
use SilverStripe\View\ArrayData;

/**
 * Class BootstrapFlashMessage
 * @package AndreLohmann\BootstrapFlashMessage
 */
class BootstrapFlashMessage
{
    protected static $message = null;

    /**
     * @param $message
     * @param $type
     */
    public static function set($message, $type)
    {
        if (!in_array($type, [
            'success',
            'info',
            'warning',
            'danger'
        ])) {
            user_error("BootstrapFlashMessage Type Error: " . $type . " not allowed", E_USER_WARNING);
        }

        Controller::curr()->getRequest()->getSession()->set('BootstrapFlashMessage', [
            'Message' => $message,
            'Type'    => $type
        ]);
    }

    /**
     * @return bool|ArrayData
     */
    public static function get()
    {
        if (self::$message === null) {
            self::$message = static::getSession()->get('BootstrapFlashMessage');
            static::getSession()->clear('BootstrapFlashMessage');
        }

        if (is_array(self::$message) && isset(self::$message['Message']) && isset(self::$message['Type'])) {
            return ArrayData::create(self::$message);
        }

        return false;
    }

    /**
     * @return \SilverStripe\Control\Session
     */
    private static function getSession()
    {
        return Controller::curr()->getRequest()->getSession();
    }
}