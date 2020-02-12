<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 13.05.2019
 * Time: 20:04
 */
ini_set( "display_errors", true ); //Выводим ошибки в браузере
date_default_timezone_set( "Australia/Sydney" );  // Устанавливаем временную зону http://www.php.net/manual/en/timezones.php
/*детали доступа к базе данных*/
define( "DB_DSN", "mysql:host=localhost;dbname=cmsexample" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
//Устанавливаем пути
define( "CLASS_PATH", "classes" ); //место хранения файлов классов
define( "TEMPLATE_PATH", "templates" );//место хранения шаблонов  HTML
//Устанавливаем количество статей, выводимых на главной странице
define( "HOMEPAGE_NUM_ARTICLES", 5 );
//Устанавливаем имя и пароль администратора
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
//Включаем класс Article
require( CLASS_PATH . "/Article.php" );

//Создаем обработчик исключительных ситуаций
function handleException( $exception ) {
    echo "Sorry, a problem occurred. Please try later.";
    error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );