#CodeIgniter i18N Library

This library makes it easier to implement CodeIgniter i18n function.

##How to use it?

Drop the contents of the download zip into your application directory. add `$this -> load -> library('i18n');` at Controller's `__construct()` or 
add `i18n` in `application/config/autoload.php` `$autoload['language'] = array('i18n');`

##Turn on auto select language function

Edit `application/config/config.php`

set enable_hooks to TRUE

    $config['enable_hooks'] = TRUE;
    
##Prevent execute auto select language function in some Controller

Add below code in __construct()

    $this -> i18n -> prevent_auto();
    
##Example code

Please see `/application/controllers/i18nauto.php` and `/application/controllers/i18nmanual.php`
    
