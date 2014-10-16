<?php namespace EmilioBravo\Platform;

use Form;

Form::macro('select_nested', function($name,$options= [])
{
    return Libraries\MyHelper::somefunction($name,$options);
});
