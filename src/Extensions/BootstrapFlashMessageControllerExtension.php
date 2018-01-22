<?php

namespace AndreLohmann\BootstrapFlashMessage;

use SilverStripe\Core\Extension;

/**
 * Class BootstrapFlashMessageControllerExtension
 * @package AndreLohmann\BootstrapFlashMessage
 */
class BootstrapFlashMessageControllerExtension extends Extension
{
    /**
     * @return bool|\SilverStripe\View\ArrayData
     */
    public function BootstrapFlashMessage()
    {
        return BootstrapFlashMessage::get();
    }
}