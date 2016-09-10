<?php
/**
 * Method to cause automatic download of postscript files
 *
 * @package Flint/Trinity
 * @since 0.1
 */

// Define the path to file.
$file = $_GET['file'];
$filename = basename( $file );

if ( ! file ) {
  // File doesn't exist, output error.
  die( 'file not found' );
} else {
  // Set headers.
  header( 'Cache-Control: public' );
  header( 'Content-Description: File Transfer' );
  header( "Content-Disposition: attachment; filename=$filename" );
  header( 'Content-Type: application/postscript' );
  header( 'Content-Transfer-Encoding: binary' );

  // Read the file from disk.
  readfile( $file );
}
 ?>
