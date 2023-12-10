<?php

namespace Models;

class activeRecord{
    #BASE DE DATOS
    protected static $db;
    protected static $table = '';
    protected static $columnsDB = [];

    #VALIDACION 
    protected static $alerts = [];
}