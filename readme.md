# Inici fitxer version.php
# Actualitza 
sudo php admin/cli/upgrade.php
# Esborra cache
sudo php admin/cli/purge_caches.php
# Desinstal·la el plugin
sudo php admin/cli/uninstall_plugins.php --plugins=local_message --run

# Extensió per accedir a la base de dades
SQLTools MySQL/MariaDB/TiDB
PHP Intellisense

# Output debug
var_dump($variable);
die; // For debugging purposes

# Veure les dades de Mysql
sudo mysql
password: eMCog1wq
use moodle

# No oblidi els punt i coma!
SELECT * FROM mdl_local_message;
SELECT * FROM mdl_local_message_read;
ctrl + c
exit


SELECT * FROM mdl_local_message lm 
           LEFT JOIN mdl_local_message_read lmr
           ON lm.id = lmr.messageid 
           WHERE lmr.userid <> 1 OR lmr.userid IS NULL;


# Permisos, no n'estic segur
sudo chmod -R 777 /var/www/html/

# adminer
https://www.atlantic.net/dedicated-server-hosting/how-to-install-adminer-on-ubuntu-24-04/
sudo apt install adminer -y
sudo a2enconf adminer
sudo systemctl reload apache2

