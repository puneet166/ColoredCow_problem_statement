# Email Services


## Table Of Contents
1. [About project](#desc)
2. [How to use the project and prerequisite for running the project in the local machine.](#desc1)
3. [Check .env file](#desc2)
4. [Check project's snaps](#desc3)

<a name="desc"></a>
## About The Project.
* This project for send Transaction email , Advertise Email , lauching product email , Bulk emails and much more.
* In this project we are using Google gmail smtp. 
* User can send email to particular person and group of people.
* The user must first login before sending the mail.
* The user can use the query form for any query and doubt.
<a name="desc1"></a>
## How to use the project and prerequisite for running the project in the local machine.
1. Download xampp.
2. Clone the repo ```git clone <l_repo>``` .
3. Go into the repo ```cd l_repo``` .
4. Run ``` composer install ``` to generate depedencies in vendor folder.
5. Generate the laravel project key ```php artisan key:generate``` .
6. Migrate and seed at the same time ```php artisan migrate:fresh --seed``` .
7. Convert ``` .env.example to .env ``` .
8. Change the 'database name' & 'username' & 'password' 
```
DB_HOST=localhost
DB_DATABASE=your data base name here
DB_USERNAME=root
DB_PASSWORD=
``` 
9. Link with storage ```php artisan storage:link``` .
10. Start the server ```php artisan serve``` .
<a name="desc2"></a>
## Let me share my .env file here.
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:ZvP1Sb5fKs6aYsuQ7AINXXbk81Th7ZpN+3vsYcVzn4Q=
APP_DEBUG=true
APP_URL=http://projectt.test

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coloredcow
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=yourmail@gmail.com
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=yourmail@gmail.com
MAIL_FROM_NAME="ColoredCow"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

* Run the command after saving the file ```php artisan config:cache``` .
* Run the server again.
<a name="desc3"></a>
## [Click here to check some snips of the project for more clarification](https://drive.google.com/file/d/1X_jfxp6_zfAzN-OvaEj_RIVx5l59rB8a/view?usp=sharing)



