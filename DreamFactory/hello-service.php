<?php
/* request parameter  */
$params = $event['request']['parameters'];
$myname = $params['myname'];

/* check myname is null */
if(empty($myname)) $myname="nobody";

/* return data */
return ['hello'=>$myname];