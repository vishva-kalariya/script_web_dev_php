<?php

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'mansi',
    'last_name' => 'vanani',
  ),
  array(
    'id' => 4767,
    'first_name' => 'vishva',
    'last_name' => 'patel',
  ),
  array(
    'id' => 3809,
    'first_name' => 'abc',
    'last_name' => 'patel',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>