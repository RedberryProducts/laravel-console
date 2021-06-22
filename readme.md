### Laravel Console

Laravel console is a handy tool that gives you possibility to debug your laravel application code in a *javascript-y* manner. you'll get Laravel Console in your devtools panel, you'll have access all the logs that were logged by the laravel logger, and you'll see these information without killing the code execution! 

**table of contents**
* [Prerequisites]()
* [Getting Started]()

----------
#### Prerequisites
In order for you to start using Laravel Console is to have [Laravel 8.x]() installed.

#### Getting Started
In order for you to use Laravel Console you need to do two things. first you should install Laravel Console package:
```sh
composer require redberry/laravel-console --dev
```

package is autodiscovered so there is no need for you to inject the service provider.
hoverver, you need to add *channel* into your *config/logging.php* file. you need to insert **console** chennel into your desired logging channel/stack for Laravel Console to be able to listen the logs and provide this data to the browser.

```php
    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single', 'console'],
            'ignore_exceptions' => false,
        ],
    ]
```

after you've completed this step, then you need to install [Laravel Console]() extension in your chrome browser and you're good to go :blush: 