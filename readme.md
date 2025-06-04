# Moodle plugin message 
It is a very basic plugin, just a learning example.
It is based on a Youtube tutorial: Moodle plugin Tutorial of channel @moodletips

https://www.youtube.com/playlist?list=PLnNniujrnp0mFwUNszRcI2OBCiBAh9Iqs

## First commit it just works on Moodle 4.2.
Install Moodle. 
Apache2 website folder is  /var/www/html/

cd  /var/www/html/moodle/local
mkdir /message

# Clone message directory 
clone https://github.com/capbussat/moodle-plugin-message.git

# Upgrades database. Use it after installation of the plugin.  
sudo php admin/cli/upgrade.php

## What it does?
Creates three pages accesed on urls:
http:/yourwebserver//moodle/local/message/manage.php List messages)
http:/yourwebserver/moodle/local/message/edit.php (Create messages)
http:/yourwebserver/moodle/local/message/bulkedit.php (Delete messages)

- List messages on Manage page.
- Create messages on Edit page. - Message notifications are created as info, warning, success or error.
- Delete messages. Select and save. 
- Plugin shows notification messages to all Moodle users, the first time they visit any Moodle page. After a notification is displayed to a user, the message is marked as read and will not be displayed again for this user.

# What you can see about Moodle development on this basic plugin?
- Use of versions (version.php)
- Database tables creation (db/install.xml)
- Create, read and delete database records (manage.php, edit.php bulkedit.php)
- Create a page  (manage.php, edit.php bulkedit.php)
- Extend form classes ( classes/form/edit.php and bulkedit.php)
- Display notifications (lib.php)
- Use of a Moodle hook. (lib.php)
- Pass data to a Mustache template (manage.php)
- Use of translations in Moodle ( /lang/en directory)

## Troubleshhoting

# Delete cache. Sometimes its necessary to delete cache in order to reflect plugin changes.
sudo php admin/cli/purge_caches.php

# Uninstall
sudo php admin/cli/uninstall_plugins.php --plugins=local_message --run
