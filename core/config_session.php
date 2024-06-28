
<?php
//More secure way of saving state in sessions
ini_set('session.use_only_cookies', 1); // make sure that website uses only sessid created by our server
ini_set('session.use_strict_mode', 1); //

session_set_cookie_params([
    'lifetime' => 1800, // set cookie expiration
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,//restricts script access
]);

session_start();

// regenerates the id after 30+ minutes
if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);//make the sessid stronger by regeneration it
    $_SESSION['last_regeneration'] = time();
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
function regenerate_session_id(){
    session_regenerate_id();
    $_SESSION['last_regeneration'] = time();

}