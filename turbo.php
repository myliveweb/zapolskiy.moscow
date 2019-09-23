<?php
ini_set('display_errors', 1);
session_start();
require_once($_SERVER["DOCUMENT_ROOT"].'/assets/php/function.php');
$section = getBestSectionIdByTemplateId(45); // Int
//$arSection = getSectionById($section); // Array
header ("Content-Type:text/xml");
echo '<rss version="2.0" xmlns:yandex="http://news.yandex.ru" xmlns:turbo="http://turbo.yandex.ru"><channel>';
echo '<item turbo="true"><title>Заголовок страницы</title><link>https://zapolskiy.moscow</link><content>' . $section . '</content></item>';
echo '</channel></rss>';
?>