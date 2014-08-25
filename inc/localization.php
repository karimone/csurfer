<?php
/**
 * localization.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 20/08/14
 * Time  : 13:56
 */
$LANGUAGES = array(
    "it" => "it_IT",
    "es" => "es_ES",
    "de" => "de_DE",
    "fr" => "fr_FR",
);

// get the locale value from the header
$locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);

// convert an "it" in "it_IT"
$locale = (array_key_exists($locale, $LANGUAGES)) ? $LANGUAGES[$locale] : "en";


// if the user requested another locale we change the value
if (isSet($_GET["locale"])) $locale = $_GET["locale"];

putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain("messages", "./locale");
textdomain("messages");
