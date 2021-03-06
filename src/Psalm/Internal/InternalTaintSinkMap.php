<?php

// This maps internal function names to sink types that we don’t want to end up there

return [
'exec' => [['shell']],
'create_function' => [['text'], ['text']],
'file_get_contents' => [['text']],
'file_put_contents' => [['shell']],
'fopen' => [['shell']],
'header' => [['text']],
'igbinary_unserialize' => [['text']],
'ldap_search' => [['text']],
'mysqli_query' => [[], ['sql']],
'passthru' => [['shell']],
'pcntl_exec' => [['shell']],
'PDO::prepare' => [['sql']],
'PDO::query' => [['sql']],
'PDO::exec' => [['sql']],
'pg_exec' => [[], ['sql']],
'pg_prepare' => [[], [], ['sql']],
'pg_put_line' => [[], ['sql']],
'pg_query' => [[], ['sql']],
'pg_query_params' => [[], ['sql']],
'pg_send_prepare' => [[], [], ['sql']],
'pg_send_query' => [[], ['sql']],
'pg_send_query_params' => [[], ['sql'], []],
'setcookie' => [['text'], ['text']],
'shell_exec' => [['shell']],
'system' => [['shell']],
'unserialize' => [['text']],
];
