Installation
============
Requirements:
-------------

```bash
- Setup PHP version >= 8.1
- VirtualHost of httpd service
- Mysql 8
- CentOS 7 or later
```

1. Install packages

```bash
# yum install epel-release
# yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
# yum --disablerepo="*" --enablerepo="remi-safe" list php[7-9][0-9].x86_64
# sudo yum-config-manager --enable remi-php74
# sudo yum install php php-mysqlnd php-fpm

# yum install httpd

# yum install composer
```

2. Create virtualHost

```bash
# vim /etc/httpd/conf.d/merchant-sandbox.omipay.vn.conf

Listen 8080
<VirtualHost *:8080>
  #ServerName merchant-sandbox.omipay.vn
  ServerName  10.0.9.41
  DocumentRoot "/data/www/merchant/public"

  ErrorLog logs/merchant.omipay.vn-error.log
  CustomLog logs/merchant.omipay.vn-access.log combined
  <Directory "/data/www/merchant">
    AddDefaultCharset UTF-8
    SetEnv ENVIRONMENT "production"
    AllowOverride All
    Options -Indexes +FollowSymLinks +MultiViews
    Require all granted
    #SetEnv HTTPS on
  </Directory>
</VirtualHost>
```

3. Setup `merchants` site

```bash
# cd /data/www/
# git clone ssh://git@gitlab.omipay.vn:31082/omipay/merchants.git
# cd merchants
# chmod 777 storage storage/*
```

3.1. Copy `.env` file

```bash
$ cp .env.example .env

MERCHANT_URL=https://merchants-sandbox.omipay.vn
DB_CONNECTION=mysql
DB_HOST=10.0.9.24
DB_PORT=3306
DB_DATABASE=omidev
DB_USERNAME=root
DB_PASSWORD="HTPhtp123!@#."
API_OMIPAY_URL=http://10.0.9.17:8088/

TELEGRAM_BOT_API=1746150771:AAFdNrxVAcQ3T1JUM6lhnB9fT4NFPmdSSV4
TELEGRAM_BOT_NAME=laptrinhphplocal_bot
TELEGRAM_BOT_TOKEN=1746150771:AAFdNrxVAcQ3T1JUM6lhnB9fT4NFPmdSSV4
TELEGRAM_WEBHOOK_URL=
TELEGRAM_CERTIFICATE_PATH=
TELEGRAM_CHANNEL_ID=706659637
TELEGRAM_LOG_CHAT_ID=706659637
TELEGRAM_LOGIN_AUTH_TOKEN=1746150771:AAFdNrxVAcQ3T1JUM6lhnB9fT4NFPmdSSV4
TELEGRAM_FINDER_BOT_API=2129002818:AAG-VroG_BcG7csTtFLzgDlcNW_GfWiXvzU
TELEGRAM_FINDER_BOT_NAME=finderbizvnlocal_bot
```

3.2. DB sync & composer installation

```bash
# cd /data/www/merchant/
# composer install --ignore-platform-reqs

# php artisan migrate
```

- Init Demo data `php artisan migrate --seed`

- Link storage directory: `php artisan storage:link`
DONE

# Appplication Demo
Check the following demo project. It is just a straight installation of the project without any modification.

Demo URL: http://htpgroup.com.vn

```
User: super@admin.com
Pass: secret

User: user@user.com
Pass: secret

```

Demo Data

```

php artisan starter:insert-demo-data --fresh

```
