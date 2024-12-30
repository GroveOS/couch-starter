#!/usr/bin/env bash

# Use a backup file and delete it afterwards
SED_CMD="sed -i.bak"

# Clone CouchCMS
git clone https://github.com/CouchCMS/CouchCMS && mv CouchCMS/couch ./ && rm -rf CouchCMS

# Move core files
mv couch/config.example.php couch/config.php
mv couch/addons/kfunctions.example.php couch/addons/kfunctions.php
mv couch/addons/extended/config.example.php couch/addons/extended/config.php

mv kfunctions.php couch/addons/kfunctions.php

# Set GMT offset for Eastern Time
$SED_CMD 's|define( '\''K_GMT_OFFSET'\'', +5.5 );|define( '\''K_GMT_OFFSET'\'', date('\''I'\'') ? 4 : 5 );|' couch/config.php

# Set database credentials
read -rp "Enter database name: " db_name
read -rp "Enter database username (default: root): " db_user_input
db_user=${db_user_input:-root}
read -rp "Enter database password (default: root): " db_pass_input
db_pass=${db_pass_input:-root}

$SED_CMD "s|define( 'K_DB_NAME', 'database_name' );|define( 'K_DB_NAME', '${db_name}' );|" couch/config.php
$SED_CMD "s|define( 'K_DB_USER', 'database_username' );|define( 'K_DB_USER', '${db_user}' );|" couch/config.php
$SED_CMD "s|define( 'K_DB_PASSWORD', 'database_password' );|define( 'K_DB_PASSWORD', '${db_pass}' );|" couch/config.php

# Set site URL
# get this directory's basename (folder name)
this_dir=$(basename "$PWD")
site_url="http://localhost:8888/CouchCMS/$this_dir/"
$SED_CMD "s|//define( 'K_SITE_URL', 'http://www.test.com/subfolder1/subfolder2/mysite/' );|define( 'K_SITE_URL', '${site_url}' );|" couch/config.php

# Set snippets directory to 'embed'
$SED_CMD 's|//define( '\''K_SNIPPETS_DIR'\'', '\''mysnippets'\'' );|define( '\''K_SNIPPETS_DIR'\'', '\''embed'\'' );|' couch/config.php

# Prompt to remove footer link
read -rp "Remove footer link? (y/n, default: n): " footer_response
remove_footer_link=$(case "${footer_response:-n}" in
  [Yy]* ) echo "1";;
  * ) echo "0";;
esac)
$SED_CMD "s|define( \x27K_REMOVE_FOOTER_LINK\x27, 0 );|define( \x27K_REMOVE_FOOTER_LINK\x27, ${remove_footer_link} );|" couch/config.php

# Clean up backup files
rm -f couch/*.bak
rm -f couch/addons/*.bak

cp craft couch/
mv craft rubbish/craft
mv spark.sh rubbish/spark.sh



# # # # # # #



# LIVE
# rm -rf rubbish/

# DEVELOPMENT
mv rubbish/* ./
