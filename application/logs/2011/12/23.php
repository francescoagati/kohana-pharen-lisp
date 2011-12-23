<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-23 10:16:06 --- ERROR: View_Exception [ 0 ]: The requested view 
    
        We've got a message for you!
        
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        
    
    
        ciao2
        We just wanted to say it! :)
    
 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-23 10:16:06 --- STRACE: View_Exception [ 0 ]: The requested view 
    
        We've got a message for you!
        
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        
    
    
        ciao2
        We just wanted to say it! :)
    
 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/view.php(137): Kohana_View->set_filename(Object(View))
#1 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/controller/template.php(33): Kohana_View::factory(Object(View))
#3 /Applications/MAMP/htdocs/kohanalisp/application/classes/controller/welcome2.php(18): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Welcome2->after()
#5 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome2))
#6 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohanalisp/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-23 10:16:45 --- ERROR: View_Exception [ 0 ]: The requested view 
    
        We've got a message for you!
        
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        
    
    
        ciao2
        We just wanted to say it! :)
    
 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-23 10:16:45 --- STRACE: View_Exception [ 0 ]: The requested view 
    
        We've got a message for you!
        
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        
    
    
        ciao2
        We just wanted to say it! :)
    
 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/view.php(137): Kohana_View->set_filename(Object(View))
#1 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/controller/template.php(33): Kohana_View::factory(Object(View))
#3 /Applications/MAMP/htdocs/kohanalisp/application/classes/controller/welcome2.php(18): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Welcome2->after()
#5 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome2))
#6 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/kohanalisp/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohanalisp/index.php(109): Kohana_Request->execute()
#9 {main}