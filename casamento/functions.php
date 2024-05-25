<?php

/**
 * Inclui todos os arquivos php de um diretório
 *
 * @param string $folder Caminho do diretório.
 */
function include_php_dir( $folder ) {
	foreach ( glob( "{$folder}/*.php" ) as $filename ) {
		require_once $filename;
	}
}

$directories = array(
	'post_types',
	'acfs',
);

$template_dir = get_template_directory();

foreach ( $directories as $directory ) {
	include_php_dir( $template_dir . '/functions/' . $directory );
}
