<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Nico\EpisodesBundle\CommandHandler;

/**
 * Description of BaseCommandHandler
 *
 * @author lamatrix
 */
class BaseCommandHandler {

    private $eventDispatcher;

    public function __construct($eventDispatcher = null) {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function raise($eventName,$event) {
        if ($this->eventDispatcher != null) {
            $this->eventDispatcher->dispatch($eventName, $event);
        }
    }

}
