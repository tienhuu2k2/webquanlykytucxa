<?php
class Home extends Controller{
    //$sv;
    
	function TrangChu(){
        $this->view("ViewMaster",[
            'jpg'=>'Home_view'
    	]);
    }
    
}
?>