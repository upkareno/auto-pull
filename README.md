# auto-pull


## Install

 
``` composer require upkareno/auto-pull ```



## Configuration
##### run this artisan command to publish provider

```php artisan vendor:publish --provider="Upkareno\AutoPull\Providers\AutoPullProvider" ```



## Then run
``` php artisan migrate ```

## Update .env file 

``` HOOK_AUTHORIZATION=YOUR_SPECIAL_KEY ```
