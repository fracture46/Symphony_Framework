<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.bFHYCjx' shared service.

return $this->privates['service_locator.bFHYCjx'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
    return ($this->services['session'] ?? $this->load(__DIR__.'/getSessionService.php'));
}));
