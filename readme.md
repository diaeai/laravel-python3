## LaravelPython3

Execute Python3 scripts inside your Laravel Application.

### Installation

`composer require diaeai/laravel-python3`

### Configuration
To edit the default package configuration, publish the config resource with the command

`php artisan vendor:publish --provider="diaeai\LaravelPython3\ServiceProvider" --tag=config`

then edit `config/python3.php`

### Usage

You can run commands in several ways:

1. Instantiating `laravel-python3` service:
```
use diaeai\LaravelPython3\Services\Python3;
...

$service = new Python3();
$result = $service->run('/path/to/script.py');
$parameters = array('par1', 'par2');
$result = $service->run('/path/to/script.py', $parameters);
```

2. Injecting from the ServiceContainer
```
use diaeai\LaravelPython3\Services\Python3;
...
public function __construct(Python3 $service)
{
  $result = $service->run('/path/to/script.py');
  $parameters = array('par1', 'par2');
  $result = $service->run('/path/to/script.py', $parameters);
}
```

3. Using the `Python3` facade
```
$result = \Python3::run('/path/to/script.py');
$parameters = array('par1', 'par2');
$result = \Python3::run('/path/to/script.py', $parameters);
```

4. Working Directory Path
```
use diaeai\LaravelPython3\Services\Python3;
...
$service = new Python3();
$parameters = array('par1', 'par2');
$result = $service->run('/path/to/script.py', $parameters, __dir__);
```

5. Via command line with an artisan command
```
php artisan python3:run /path/to/script.py "Some parameter" "Working Directory Path"
```
Note that you can use an arbitrary number of parameters

### Issues, Questions and Pull Requests
You can report issues and ask questions in the [issues section](https://github.com/diaeai/laravel-python3/issues). Please start your issue with ISSUE: and your question with QUESTION:

If you have a question, check the closed issues first. Over time, I've been able to answer quite a few.

To submit a Pull Request, please fork this repository, create a new branch and commit your new/updated code in there. Then open a Pull Request from your new branch. Refer to [this guide](https://help.github.com/articles/about-pull-requests/) for more info.
