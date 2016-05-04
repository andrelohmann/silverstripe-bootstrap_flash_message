<?php

class BootstrapFlashMessageControllerExtension extends Extension {
        
        // return the BootstrapFlashMessage
        public function BootstrapFlashMessage(){
            return BootstrapFlashMessage::get();
        }
        
}