# Laravel Translation Manager

This package is used to comfortably manage, view, edit and translate Laravel language files with
translation assistance through the Yandex Translation API. It augments the Laravel Translator
system with a ton of practical functionality. [Features]

:warning: Only **MySQL** and **PostgreSQL** Database connections are supported. Adding another
database only requires additional repository interface implementations following the examples of
[MysqlTranslatorRepository.php] or [PostgresTranslatorRepository.php].

#### :warning: **If you want to use this package for a smaller version than Laravel 7 use the original package from (https://github.com/vsch/laravel-translation-manager) ** 

When upgrading from earlier versions run:

```bash
$ php artisan vendor:publish --provider="Revolta77\TranslationManager\ManagerServiceProvider" --tag=public --force
$ php artisan vendor:publish --provider="Revolta77\TranslationManager\ManagerServiceProvider" --tag=migrations
$ php artisan migrate
```

#### Supported Laravel Versions

> * For Laravel 7.0 require: `"revolta77/laravel-translation-manager": "~1.0"`

> #### Initial Localizations Added
>
> :exclamation: If you have made correction to the auto-translated localization and would like
> to share them with others please do so. It will be greatly appreciated.

**Detailed information is now in the [wiki].**

[Installation][]  
[Configuration][]  
[Version Notes][]



![Screen Shot Show Source Refs]


### Per Locale User Access Control

Implementation changed from the last release since using a closure in config file is not
supported by the framework. Now using abilities to do the same. See
[Enabling per locale user access control]

By default this option is turned off and any user who does not have `ltm-admin-translations`
ability can modify any locale. With `user_locales_enabled` option enabled you can control which
locales a user is allowed to modify. Default for all users is all locales, unless you
specifically change that through the web UI, see [User Admin] or by populating the
`ltm_user_locales` table appropriately.

### Screen Shot

![Translation Manager Screenshot]

***

\* This package was originally based on Barry vd. Heuvel's excellent [barryvdh] package and [vsch] package from https://github.com/vsch/laravel-translation-manager.

[vsch]: https://github.com/vsch/laravel-translation-manager
[barryvdh]: https://github.com/barryvdh/laravel-translation-manager
[Configuration]: ../../wiki/Configuration
[Enabling per locale user access control]: ../../wiki/Configuration#enabling-per-locale-user-access-control
[Features]: ../../wiki/#features
[Installation]: ../../wiki/Installation
[Installation: Publishing And Running Migrations]: ../../wiki/Installation#publishing-and-running-migrations
[MysqlTranslatorRepository.php]: https://github.com/Revolta77/ltm/blob/master/src/Repositories/MysqlTranslatorRepository.php
[PostgresTranslatorRepository.php]: https://github.com/Revolta77/ltm/blob/master/src/Repositories/PostgresTranslatorRepository.php
[Removing dependency on UserPrivilegeMapper from facade alias array]: ../../wiki/Installation#removing-dependency-on-userprivilegemapper-from-facade-alias-array
[Removing dependency on UserPrivilegeMapper from service providers array]: ../../wiki/Installation#removing-dependency-on-userprivilegemapper-from-service-providers-array
[Screen Shot Show Source Refs]: https://raw.githubusercontent.com/wiki/revolta77/laravel-translation-manager/images/ScreenShot_ShowSourceRefs.png
[Setting up user authorization]: ../../wiki/Installation#setting-up-user-authorization
[Translation Manager Screenshot]: https://raw.githubusercontent.com/wiki/revolta77/laravel-translation-manager/images/ScreenShot_main.png
[User Admin]: ../../wiki/Web-Interface#user-admin
[Version Notes]: versioninfo.md
[Web Interface: Source References]: ../../wiki/Web-Interface#source-references
[wiki]: ../../wiki

