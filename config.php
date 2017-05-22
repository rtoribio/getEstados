<?php 

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de la app */
define('DB_NAME', getenv("DB_NAME") ?: 'direcciones');

/** Tu nombre de usuario de MySQL */
define('DB_USER', getenv("DB_USER") ?: 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', getenv("DB_PASSWORD") ?: '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', getenv("DB_HOST") ?: 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', getenv("DB_CHARSET") ?: 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', getenv("DB_COLLATE") ?: '');



?>