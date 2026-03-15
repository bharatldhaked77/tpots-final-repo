<?php
namespace TPOTS\EventPlugin\Services;
class EventService {
    public function register_routes() {
        add_action('rest_api_init', function(){
            register_rest_route('tpots/v1','/events',[
                'methods'=>'GET',
                'callback'=>[$this,'events']
            ]);
        });
    }
    public function events($req){
        return get_posts(['post_type'=>'event']);
    }
}
