<?php
/**
 * Modules Configuration
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */


return array(
    //--------------------------------------------------------------------------
    // Path to Modules
    //--------------------------------------------------------------------------

    'path' => APPDIR .'Modules',

    //--------------------------------------------------------------------------
    // Modules Base Namespace
    //--------------------------------------------------------------------------

    'namespace' => 'App\Modules\\',

    //--------------------------------------------------------------------------
    // Path to Cache
    //--------------------------------------------------------------------------

    'cache' => STORAGE_PATH .'modules.php',

    //--------------------------------------------------------------------------
    // Registered Modules
    //--------------------------------------------------------------------------

    'modules' => array(
        'pages' => array(
            'name'     => 'Modules/Pages',
            'basename' => 'Pages',
            'enabled'  => true,
            'order'    => 9002,
        ),
    ),
);
