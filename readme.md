# Moodle plugin message 
It is a very basic plugin, just a learning example.
It is based on a Youtube tutorial: Moodle plugin Tutorial of channel @moodletips

https://www.youtube.com/playlist?list=PLnNniujrnp0mFwUNszRcI2OBCiBAh9Iqs

# First commit it just works on Moodle 4.2.
Install Moodle. 
Clone a  message directory on directory /local of moodle

# What it does
Creates three pages accesed on urls:
http:/yourwebserver//moodle/local/message/manage.php (list of messages)
http:/yourwebserver/moodle/local/message/edit.php (create notifications)
http:/yourwebserver/moodle/local/message/bulkedit.php (delete select notifications)

- Create a message on Manage page.
- Shows notification message to all Moodle users.  Notifications are are shown as info, warning, success or error. Visiting any Moodle page shows the notifications to a user. After they are displayed to a user, messages are marked as read and will not be displayed again for this user.
- It is possible to bulk delete messages. 

# What you can see about Moodle development on this basic plugin
- Database tables creation
- Create, read and delete database records
- Create a page 
- Display notifications
- Pass data to a Mustache template
- Use of hooks
- Use of translations in Moodle
