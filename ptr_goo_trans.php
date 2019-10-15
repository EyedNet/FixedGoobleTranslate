<?php
/*

___________                .___             __   
\_   _____/__.__. ____   __| _/____   _____/  |_ 
 |    __)<   |  |/ __ \ / __ |/    \_/ __ \   __\
 |        \___  \  ___// /_/ |   |  \  ___/|  |  
/_______  / ____|\___  >____ |___|  /\___  >__|  
        \/\/         \/     \/    \/     \/      
This code it's free CC By*/

/*Ponemos un listener al hook wp_head para añadir código en el html*/
add_action('wp_head', 'add_trans',10);

function add_trans () {
	 echo'<div id="glt-translate-trigger"><span class="translate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">🈯 Language</font></font></span></div>';
	 
	
 
	
}?>  
