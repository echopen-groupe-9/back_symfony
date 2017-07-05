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

You will find below, all our accessible path
```
 ----------------------------------- ---------- -------- ------ -----------------------------------
  Name                                Method     Scheme   Host   Path
 ----------------------------------- ---------- -------- ------ -----------------------------------
  _wdt                                ANY        ANY      ANY    /_wdt/{token}
  _profiler_home                      ANY        ANY      ANY    /_profiler/
  _profiler_search                    ANY        ANY      ANY    /_profiler/search
  _profiler_search_bar                ANY        ANY      ANY    /_profiler/search_bar
  _profiler_info                      ANY        ANY      ANY    /_profiler/info/{about}
  _profiler_phpinfo                   ANY        ANY      ANY    /_profiler/phpinfo
  _profiler_search_results            ANY        ANY      ANY    /_profiler/{token}/search/results
  _profiler_open_file                 ANY        ANY      ANY    /_profiler/open
  _profiler                           ANY        ANY      ANY    /_profiler/{token}
  _profiler_router                    ANY        ANY      ANY    /_profiler/{token}/router
  _profiler_exception                 ANY        ANY      ANY    /_profiler/{token}/exception
  _profiler_exception_css             ANY        ANY      ANY    /_profiler/{token}/exception.css
  _twig_error_test                    ANY        ANY      ANY    /_error/{code}.{_format}
  api_entrypoint                      ANY        ANY      ANY    /{index}.{_format}
  api_doc                             ANY        ANY      ANY    /docs.{_format}
  api_jsonld_context                  ANY        ANY      ANY    /contexts/{shortName}.{_format}
  api_activities_get_collection       GET        ANY      ANY    /activities.{_format}
  api_activities_post_collection      POST       ANY      ANY    /activities.{_format}
  api_activities_get_item             GET        ANY      ANY    /activities/{id}.{_format}
  api_activities_put_item             PUT        ANY      ANY    /activities/{id}.{_format}
  api_activities_delete_item          DELETE     ANY      ANY    /activities/{id}.{_format}
  api_users_get_collection            GET        ANY      ANY    /users.{_format}
  api_users_post_collection           POST       ANY      ANY    /users.{_format}
  api_users_get_item                  GET        ANY      ANY    /users/{id}.{_format}
  api_users_put_item                  PUT        ANY      ANY    /users/{id}.{_format}
  api_users_delete_item               DELETE     ANY      ANY    /users/{id}.{_format}
  api_login_check                     ANY        ANY      ANY    /api/login_check
  fos_user_security_login             GET|POST   ANY      ANY    /login
  fos_user_security_check             POST       ANY      ANY    /login_check
  fos_user_security_logout            GET|POST   ANY      ANY    /logout
  fos_user_profile_show               GET        ANY      ANY    /profile/
  fos_user_profile_edit               GET|POST   ANY      ANY    /profile/edit
  fos_user_registration_register      GET|POST   ANY      ANY    /register/
  fos_user_registration_check_email   GET        ANY      ANY    /register/check-email
  fos_user_registration_confirm       GET        ANY      ANY    /register/confirm/{token}
  fos_user_registration_confirmed     GET        ANY      ANY    /register/confirmed
  fos_user_resetting_request          GET        ANY      ANY    /resetting/request
  fos_user_resetting_send_email       POST       ANY      ANY    /resetting/send-email
  fos_user_resetting_check_email      GET        ANY      ANY    /resetting/check-email
  fos_user_resetting_reset            GET|POST   ANY      ANY    /resetting/reset/{token}
  fos_user_change_password            GET|POST   ANY      ANY    /profile/change-password
  easyadmin                           ANY        ANY      ANY    /dashboard/
  admin                               ANY        ANY      ANY    /dashboard/
 ----------------------------------- ---------- -------- ------ -----------------------------------

```