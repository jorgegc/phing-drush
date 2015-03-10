<?php
/**
 * @file
 * Drush aliases file.
 */

$aliases['staging'] = array(
  'root' => '/var/www/current',
  'uri' => 'example.com',
  'remote-host' => 'example.staging.website',
  'remote-user' => 'deployer',
  'path-aliases' => array(
    '%dump-dir' => '/var/tmp',
    '%real-files' => '/var/www/shared/files/',
  ),
);

$aliases['dev'] = array(
  'root' => '/var/www/current',
  'uri' => 'example.com',
  'remote-host' => 'example.dev.website',
  'remote-user' => 'deployer',
  'path-aliases' => array(
    '%dump-dir' => '/var/tmp',
    '%real-files' => '/var/www/shared/files/',
  ),
);
