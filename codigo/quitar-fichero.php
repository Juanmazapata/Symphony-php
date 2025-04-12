<?php

array_map ( 'unlink' , glob ( "*.zip" ));
array_map ( 'unlink' , glob ( "*.sql" ));

?>
