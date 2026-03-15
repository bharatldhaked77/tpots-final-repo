<?php
function tpots_render_events(){
$events=get_posts(['post_type'=>'event']);
foreach($events as $e){echo '<h3>'.$e->post_title.'</h3>';}
}
