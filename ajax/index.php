<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

header('Content-Type: application/json');


use \App\Classes\Helpers\Helper;
use \Bitrix\Highloadblock\HighloadBlockTable;
use \Bitrix\Main\Loader;
use \Bitrix\Main\Web\Json;
use \Bitrix\Main\Application;
use \Bitrix\Main\SystemException;
use \Bitrix\Main\LoaderException;
use \Bitrix\Main\UserTable;

try {
    $app = Application::getInstance();
    $request = $app->getContext()->getRequest();
} catch (SystemException $e) {
    echo Json::encode(['error' => $e->getMessage()]);
    die;
}

switch ($request->get('typeForm')) {
    case "formRequest":
        if (!empty($request->get('name')) && !empty($request->get('phone'))) {
            $res = [];

            // запишем данные в админку
            CModule::IncludeModule("iblock");
            $el = new CIBlockElement;

            $arLoadProductArray = Array(
                "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
                "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
                "IBLOCK_ID"      => IBLOCK_FORMS,
                "NAME"           => $request->get('nameForm'),
                "ACTIVE"         => "Y",            // активен
                "PREVIEW_TEXT"   => "Имя: ".$request->get('name')." / Телефон: ".$request->get('phone')." / IP: ".$request->get('ip'),
            );

            $res[] = $el->Add($arLoadProductArray);

            // отправка формы
            $arEventFields = [
                "NAME" => $request->get('name'),
                "PHONE" => $request->get('phone'),
                "FORM_NAME" => $request->get('nameForm'),
                "IP" => $request->get('ip'),
            ];

            $res[] = CEvent::Send("REQUEST_FORM", "s1", $arEventFields);

            echo Json::encode(['status' => true, 'result' => $res]);
        } else {
            echo Json::encode(['status' => false, 'result' => 'Форма заполнена с ошибками!']);
        }
    break;

    default:
        echo Json::encode(['error' => 'param form not found']);
        break;
}