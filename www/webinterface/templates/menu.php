<?php
class Menu
{
    public static function render()
    {
        echo '<div class="main_menu">
                <ul>
                    <li class="first 1"><a href="' . WPNXM_WEBINTERFACE_ROOT . 'config.php">Configuration</a></li>
                    <li class="2"><a href="' . WPNXM_WEBINTERFACE_ROOT . '">Your Projects</a></li>
                    <li class="3"><a href="' . WPNXM_WEBINTERFACE_ROOT . 'phpinfo.php">PHP Info</a></li>
                    <li class="4"><a href="' . WPNXM_WWW_ROOT . 'phpmyadmin/phpmyadmin.php">PHPMyAdmin</a></li>
                    <li class="5"><a href="/5/">5</a></li>
                    <li class="6"><a href="/6/">6</a></li>
                    <li class="last 7"><a href="/7/">7</a></li>
                </ul>
            </div>';
    }
}
?>