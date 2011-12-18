<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * I18n library configuration file
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author      Lawrence Cheung
 * @version     1.0
 * @link        https://github.com/lawrence0819
 */

//Add file in this array, if you want I18n library auto load them
$config['language']['files'] = array('messages');

//If user locale not found, set this valus as a defaul user locale
$config['language']['default_locale'] = 'en';

//Default language folder, if locale folder not found
$config['language']['locale']['default'] = 'tchinese';

//zh-CN locale mapped to schinese folder
$config['language']['locale']['zh-CN'] = 'schinese';

//zh-TW locale mapped to tchinese folder
$config['language']['locale']['zh-TW'] = 'tchinese';

//en locale mapped to schinese folder
$config['language']['locale']['en'] = 'english';

/* End of file i18n.php */
/* Location: ./application/config/i18n.php */