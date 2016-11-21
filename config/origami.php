<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['origami'] = array(
    'entity_autoload' => TRUE,
    'entity_path' => APPPATH.'entities',
    'binary_enable' => TRUE,
    'encryption_enable' => TRUE,
    'encryption_key' => bin2hex('Origami'),
    'exclude_tables' => NULL
);
