<?php
$CONF['configured'] = true;
$CONF['database_type'] = 'mysqli';
$CONF['database_host'] = getenv('MYSQL_HOST');
$CONF['database_user'] = getenv('MYSQL_USER');
$CONF['database_password'] = getenv('MYSQL_PASSWORD');
$CONF['database_name'] = getenv('MYSQL_DATABASE');
$CONF['dovecotpw'] = "/usr/bin/doveadm pw";
$CONF['encrypt'] = 'dovecot:CRAM-MD5';

require_once '/config/__config.php';

if (is_file('/config/___setup_password.php')) {
  require_once '/config/___setup_password.php';
}

foreach (glob('/config/custom/*.php') as $f) {
  require_once $f;
}
?>
