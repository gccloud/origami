<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Origami ORM (objet relationnel mapping)
 * @author Yoann VANITOU
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link https://github.com/maltyxx/origami
 */

/**
 * Chargement automatique des entitées
 * @param string $class
 */
function origami_entity_autoload($class)
{
    $key = 'Entity\\';
    $length = strlen($key);

    if (substr($class, 0, $length) === $key) {
        $class = substr($class, $length);
        $entity_path = get_instance()->origami->getConfig('entity_path');

        (is_array($entity_path)) or $entity_path = array($entity_path);

        foreach($entity_path as $path) {
            $file_path = str_replace('\\', '/', $path.'/'.$class.'.php');

            if (is_file($file_path)) {
                include_once($file_path);
            }
        }
    }
}

spl_autoload_register('origami_entity_autoload');

// ------------------------------------------------------------------------

/* End of file origami_helper.php */
/* Location: ./helpers/origami_helper.php */
