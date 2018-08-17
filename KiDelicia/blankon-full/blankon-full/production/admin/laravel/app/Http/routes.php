<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// default public route
Route::get('/', 'DashboardController@index');

// dashboard route
Route::get('dashboard/index', 'DashboardController@index');

// frontend route
Route::get('frontend/index', 'DashboardController@frontend');

// versions route
Route::get('versions/index', 'DashboardController@version');

// versions route
Route::get('animate/index', 'DashboardController@animate');

// start blog route
Route::get('blog/grid', 'BlogController@grid');
Route::get('blog/list', 'BlogController@getlist');
Route::get('blog/single', 'BlogController@single');
// end blog route

// start mail route
Route::get('mail/inbox', 'MailController@inbox');
Route::get('mail/compose', 'MailController@compose');
Route::get('mail/view', 'MailController@view');
// end mail route

// start page route
Route::get('page/gallery', 'PageController@gallery');
Route::get('page/faq', 'PageController@faq');
Route::get('page/invoice', 'PageController@invoice');
Route::get('page/messages', 'PageController@messages');
Route::get('page/timeline', 'PageController@timeline');
Route::get('page/profile', 'PageController@profile');
Route::get('page/search-course', 'PageController@searchCourse');

Route::get('page/error-403', 'PageController@error403');
Route::get('page/error-404', 'PageController@error404');
Route::get('page/error-500', 'PageController@error500');
Route::get('page/error-403-type-2', 'PageController@error403Type2');
Route::get('page/error-404-type-2', 'PageController@error404Type2');
Route::get('page/error-500-type-2', 'PageController@error500Type2');

Route::get('page/signin', 'PageController@signin');
Route::get('page/signintype2', 'PageController@signinType2');
Route::get('page/signup', 'PageController@signup');
Route::get('page/lost-password', 'PageController@lostPassword');
Route::get('page/lock-screen', 'PageController@lockScreen');

Route::get('dashboard/signin', 'PageController@signin');
Route::get('dashboard/lock-screen', 'PageController@lockScreen');
// end page route

// start form route
Route::get('form/element', 'FormController@element');
Route::get('form/advanced', 'FormController@advanced');
Route::get('form/layout', 'FormController@layout');
Route::get('form/validation', 'FormController@validation');
Route::get('form/wizard', 'FormController@wizard');
Route::get('form/wysiwyg', 'FormController@wysiwyg');
Route::get('form/xeditable', 'FormController@xeditable');
// end form route


// start table route
Route::get('table/default', 'TableController@defaults');
Route::get('table/color', 'TableController@color');
Route::get('table/datatable', 'TableController@datatable');
// end table route

// start maps route
Route::get('map/google', 'MapController@google');
Route::get('map/vector', 'MapController@vector');
// end maps route

// start chart route
Route::get('chart/flot', 'ChartController@flot');
Route::get('chart/morris', 'ChartController@morris');
Route::get('chart/chartjs', 'ChartController@chartjs');
Route::get('chart/c3js', 'ChartController@c3js');
// end chart route

// start component route
Route::get('component/grid-system', 'ComponentController@gridSystem');
Route::get('component/buttons', 'ComponentController@buttons');
Route::get('component/typography', 'ComponentController@typography');
Route::get('component/panel', 'ComponentController@panel');
Route::get('component/alerts', 'ComponentController@alerts');
Route::get('component/modals', 'ComponentController@modals');
Route::get('component/video', 'ComponentController@video');
Route::get('component/tabsaccordion', 'ComponentController@tabsaccordion');
Route::get('component/sliders', 'ComponentController@sliders');

Route::get('component/icon/glyphicons', 'ComponentController@glyphicons');
Route::get('component/icon/glyphicons-pro', 'ComponentController@glyphiconsPro');
Route::get('component/icon/font-awesome', 'ComponentController@fontAwesome');
Route::get('component/icon/weather-icons', 'ComponentController@weatherIcons');
Route::get('component/icon/map-icons', 'ComponentController@mapIcons');
Route::get('component/icon/simple-line-icons', 'ComponentController@simpleLineIcons');

Route::get('component/other', 'ComponentController@other');
// end component route

// start layout route
Route::get('layout/blank', 'LayoutController@blank');
Route::get('layout/boxed', 'LayoutController@boxed');
Route::get('layout/header-fixed', 'LayoutController@headerFixed');
Route::get('layout/sidebar-fixed', 'LayoutController@sidebarFixed');
Route::get('layout/sidebar-minimize', 'LayoutController@sidebarMinimize');
Route::get('layout/sidebar-default', 'LayoutController@sidebarDefault');
Route::get('layout/sidebar-box', 'LayoutController@sidebarBox');
Route::get('layout/sidebar-rounded', 'LayoutController@sidebarRounded');
Route::get('layout/sidebar-circle', 'LayoutController@sidebarCircle');
Route::get('layout/footer-fixed', 'LayoutController@footerFixed');
// end layout route

// start widget route
Route::get('widget/overview', 'WidgetController@overview');
Route::get('widget/social', 'WidgetController@social');
Route::get('widget/blog', 'WidgetController@blog');
Route::get('widget/weather', 'WidgetController@weather');
Route::get('widget/misc', 'WidgetController@misc');
// end widget route

