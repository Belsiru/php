<?php
/**
 * Bootstrapping functions, essential and needed for Anax to work together with some common helpers.
 *
 */

/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Epo: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = EPO_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

function dump($a) {
  echo '<pre>' . print_r($a, 1) . '</pre>';
}
