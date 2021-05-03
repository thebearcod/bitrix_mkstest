<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <? Asset::getInstance()->addString("<link rel='shortcut icon' href='/favicon.ico' />"); ?>
    <? Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Montserrat:Regular' rel='stylesheet'>"); ?>
    <? Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Montserrat:Medium' rel='stylesheet'>"); ?>
    <? Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Montserrat:Semi-Bold' rel='stylesheet'>"); ?>
    <? Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Montserrat:Bold' rel='stylesheet'>"); ?>

    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/slick.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/slick-theme.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css"); ?>


</head>
<body>
    <div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="logo wow slideInLeft" data-wow-delay='0.5s' data-wow-duration='0.5s'></div>
                <div class="header_block wow slideInRight" data-wow-delay='0.5s' data-wow-duration='0.5s'>
                    <div class="phone_brief">
                        <a class="brief" href="#">Скачать бриф</a>
                        <a href="tel:" class="header_phone"><?=getPhone()?></a>
                    </div>
                    <div class="menu_block">
                        <span class="hamb"></span>
                        <span class="hamb_close"></span>
                        <ul class="menu menu_hamb">
                            <li><a href="#" class="to_about_company">О компании</a></li>
                            <li><a href="#" class="to_service">Направления</a></li>
                            <li><a href="#" class="to_recommend">Отзывы</a></li>
                            <li><a href="#" class="to_map">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
	
						