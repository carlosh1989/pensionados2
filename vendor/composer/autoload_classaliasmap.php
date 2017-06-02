<?php
return array (
  'aliasToClassNameMapping' => 
  array (
    'view' => 'System\\template\\View',
    'controller' => 'System\\core\\BaseController',
    'session' => 'rcastera\\Browser\\Session\\Session',
    'token' => 'System\\tools\\security\\Token',
    'eloquent' => 'DB\\Database',
    'message' => 'System\\tools\\session\\Message',
    'arr' => 'System\\tools\\render\\Arr',
  ),
  'classNameToAliasMapping' => 
  array (
    'System\\template\\View' => 
    array (
      'view' => 'view',
    ),
    'System\\core\\BaseController' => 
    array (
      'controller' => 'controller',
    ),
    'rcastera\\Browser\\Session\\Session' => 
    array (
      'session' => 'session',
    ),
    'System\\tools\\security\\Token' => 
    array (
      'token' => 'token',
    ),
    'DB\\Database' => 
    array (
      'eloquent' => 'eloquent',
    ),
    'System\\tools\\session\\Message' => 
    array (
      'message' => 'message',
    ),
    'System\\tools\\render\\Arr' => 
    array (
      'arr' => 'arr',
    ),
  ),
);