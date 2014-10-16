<?php namespace EmilioBravo\Test;

use Illuminate\Html\FormBuilder as Form;

Form::macro('select_nested', function($name,$options= [])
{
    return \EmilioBravo\Test\Libraries\MyHelper::somefunction($name,$options);
});
