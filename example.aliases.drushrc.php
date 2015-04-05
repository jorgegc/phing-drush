<?php

/**
 * @file
 * Drush aliases file.
 */

$aliases['live'] = array(
  'root' => '${app.root.live}',
  'uri' => '${app.uri.live}',
  'remote-host' => '${ssh.host.live}',
  'remote-user' => '${ssh.user.live}',
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files/',
  ),
);

$aliases['uat'] = array(
  'root' => '${app.root.uat}',
  'uri' => '${app.uri.uat}',
  'remote-host' => '${ssh.host.uat}',
  'remote-user' => '${ssh.user.uat}',
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files/',
  ),
);

$aliases['local'] = array(
  'root' => '${app.root}',
  'uri' => '${app.uri}',
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files/',
  ),
);
