<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.BgZPdw3' shared service.

return $this->privates['.service_locator.BgZPdw3'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('projet' => function (): \App\Entity\Projet {
    return ($this->privates['.errored..service_locator.BgZPdw3.App\Entity\Projet'] ?? $this->load('getProjetService.php'));
}));