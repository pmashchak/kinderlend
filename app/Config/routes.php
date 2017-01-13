<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

  Router::connect('/', array('controller' => 'home', 'action' => 'index'));
  Router::connect('/detskiy-sad', array('controller' => 'home', 'action' => 'full'));
  Router::connect('/centr-razvitiya', array('controller' => 'home', 'action' => 'center'));
  Router::connect('/contacts', array('controller' => 'home', 'action' => 'contacts'));
  Router::connect('/angliyskiy', array('controller' => 'home', 'action' => 'angliyskiy'));
  Router::connect('/gruppy', array('controller' => 'home', 'action' => 'gruppy'));
  Router::connect('/rasporiadok-dnia', array('controller' => 'home', 'action' => 'rasporiadok'));
  Router::connect('/metodiki', array('controller' => 'home', 'action' => 'metodiki'));
  Router::connect('/vospitateli', array('controller' => 'home', 'action' => 'vospitateli'));
  Router::connect('/menu', array('controller' => 'home', 'action' => 'menu'));
  Router::connect('/foto', array('controller' => 'home', 'action' => 'foto'));
  Router::connect('/ceny', array('controller' => 'home', 'action' => 'ceny'));
  Router::connect('/thank_you', array('controller' => 'home', 'action' => 'thank_you'));
  Router::connect('/sitemap.html', array('controller' => 'home', 'action' => 'sitemap'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
