<?php

function autocargar($claseName)
{
    include  $claseName . '.php';
}

spl_autoload_register('autocargar');
