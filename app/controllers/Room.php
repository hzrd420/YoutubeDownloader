<?php

class Room extends Controller{

    public function showRoom($f3): void{
        $f3->set('page.title', 'Room');
        $template= new Template;
        echo $template->render('/ui/room.html');
    }//render


}//class