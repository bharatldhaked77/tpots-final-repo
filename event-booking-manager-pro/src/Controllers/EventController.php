<?php
namespace TPOTS\EventPlugin\Controllers;
class EventController {
    public function register() {
        add_action('init', [$this,'cpt']);
    }
    public function cpt() {
        register_post_type('event',[
            'label'=>'Events',
            'public'=>true,
            'supports'=>['title','editor','thumbnail'],
            'has_archive'=>true
        ]);
    }
}
