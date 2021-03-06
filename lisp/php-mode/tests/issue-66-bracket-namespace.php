<?php

/**
 * Github Issue:    https://github.com/ejmr/php-mode/issues/66
 *
 * Namespace examples from
 * http://www.php.net/manual/en/language.namespaces.definitionmultiple.php
 */

namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}

namespace { // global code
  function myfun() {
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();
  }
}
?>
