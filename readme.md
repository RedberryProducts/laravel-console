### Laravel Console

Laravel console is a handy tool that gives you possibility to debug your laravel application code in a *javascript-y* manner. you'll get Laravel Console in your devtools panel, you'll have access to all the logs that were logged by the Laravel Console, and you'll see these information without killing the code execution! 

**table of contents**
* [Prerequisites](#prerequisites)
* [Getting Started](#getting-started)
* [Usage](#usage)

----------
#### Prerequisites
In order for you to start using Laravel Console, you must have [Laravel 8.x]() installed.

#### Getting Started
In order for you to use Laravel Console you need to do two things. first you should install Laravel Console package:
```sh
composer require redberry/laravel-console --dev
```

package is autodiscovered so there is no need for you to inject the service provider.

after you've completed this step, then you need to install [Laravel Console](https://chrome.google.com/webstore/detail/laravel-console/eikhhbiadcdalcbppkfppnlmhhmcmanp) extension in your chrome browser and you're good to go :blush: 

#### Usage

For you to be able to log information in the Laravel Console devtools page, you are given facade:
```php
use Redberry\LaravelConsole\Facades\Console;

Console::emergency  ('hi there!');
Console::alert      ('hi there!');
Console::critical   ('hi there!');
Console::error      ('hi there!');
Console::warning    ('hi there!');
Console::notice     ('hi there!');
Console::info       ('hi there!');
Console::log        ('hi there!');
```

Respectively you can use helper function and more convinient way of logging:
```php
console()->emergency  ('hi there!');
console()->alert      ('hi there!');
console()->critical   ('hi there!');
console()->error      ('hi there!');
console()->warning    ('hi there!');
console()->notice     ('hi there!');
console()->info       ('hi there!');
console()->log        ('hi there!');
```

Happy logging :yum: