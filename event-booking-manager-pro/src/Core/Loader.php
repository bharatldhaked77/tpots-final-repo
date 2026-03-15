<?php
namespace TPOTS\EventPlugin\Core;
use TPOTS\EventPlugin\Controllers\EventController;
use TPOTS\EventPlugin\Services\EventService;
class Loader {
    public function run() {
        (new EventController())->register();
        (new EventService())->register_routes();
    }
}
