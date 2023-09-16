<?php
defined('BASEPATH') OR exit('No direct script access allowed');





$route=array(
    'default_controller'=>'Dashboard/index',


    /* Template Route */
    'template'=>'Template/index',
    'template/get'=>'Template/get_template',
    'template/add'=>'Template/add_template',
    'template/delete'=>'Template/delete_template',
    'template/update'=>'Template/update_template',

    /* Home Route */
    'home'=>'homeController/index',
    'home/add'=>'homeController/add_home',
    'home/get'=>'homeController/get_home', 
    'home/delete'=>'homeController/delete_home',
    'home/update'=>'homeController/update_home',


    /* Home Route */
    'service'=>'serviceController/index',
    
);
