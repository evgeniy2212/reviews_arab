#!/bin/sh
/usr/bin/php /home/u771985207/domains/reviews4arab.com/reviews4arab/artisan schedule:run 1>> /dev/null 2>&1
/usr/bin/php /home/u771985207/domains/reviews4arab.com/reviews4arab/artisan queue:work --queue=high,default
