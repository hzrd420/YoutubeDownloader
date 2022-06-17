<?php

class MainController extends Controller{

    public function showHomePage($f3): void{
        $f3->set('page.title', 'Home');
        $template= new Template;
        echo $template->render('../ui/home.html');
    }//showHomePage

   
    //creates a room with a random url
    public function create($f3):void {
        $charray = array_merge(range('a','z'), range('0','9'));
        $max = count($charray) - 1;
        $randomSite = '';
        for ($i = 0; $i < 8; $i++) {
            $randomChar = mt_rand(0, $max);
            $randomSite  .= $charray[$randomChar];
        }
        
        $f3->reroute('room'. $randomSite);
    }//create
    
    //shows Room
    public function showRoom($f3): void{
        $f3->set('page.title', 'Room');
        $template= new Template;
        echo $template->render('../ui/room.html');
    }//render


}//class