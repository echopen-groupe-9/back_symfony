Install
========================

The events will display on a specific view, reachable on another repository -- https://github.com/echopen-groupe-9/front-Vuejs. The separation in two repository beetween our main site and this dashboard has for main purpose to keep clear, and to help you, install this without any issue.

Install
--------------
Clone the repository, then go to the project cd MyPathToTheFolder and do
```
composer install

php bin/console doctrine:database:create

php bin/console assets:install --symlink

php bin/console doctrine:schema:update --dump-sql --force

php bin/console server:run
```
If you want to create an admin user directly from the CLI :
```
php bin/console fos:user:create adminuser --super-admin
```
Otherwhise just go to ```/register```
Finnaly, in order to access to the dashboard simply add ```/dashboard``` in the url parameter. 


Note that in order to work properly it will create a database. Make sure your mandatory information to connect SQL server are correct in the parameters.yml
```
Echopen/
├── app/
│   ├── config
│   │   ├── parameters.yml
```
Here is a sample of what this file should look like with a connexion in localhost
```
parameters:
    database_host: localhost # 127.0.0.1
    database_port: null
    database_name: echopen # the name that will have your database
    database_user: root
    database_password: root 
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: # your personal token 
    jwt_private_key_path: '%kernel.root_dir%/../var/jwt/private.pem'
    jwt_public_key_path: '%kernel.root_dir%/../var/jwt/public.pem'
    jwt_key_pass_phrase: echopen
    jwt_token_ttl: 3600
    cors_allow_origin: 'http://localhost'

```
