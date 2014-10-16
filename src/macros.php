<?php namespace EmilioBravo\Test;

use Illuminate\Support\Facades\Form;

Form::macro('select_nested', function($name,$options= [])
{
    return \EmilioBravo\Test\Libraries\MyHelper::somefunction($name,$options);
});
