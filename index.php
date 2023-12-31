<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">
                Связаться
            </div>
            <div class="contact-form__head-text">
                Наши сотрудники помогут выполнить подбор услуги и расчет цены с учетом ваших требований
            </div>
        </div>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:form.result.new",
            "mainpage_form",
            array(
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHAIN_ITEM_LINK" => "",
                "CHAIN_ITEM_TEXT" => "",
                "EDIT_URL" => "result_edit.php",
                "IGNORE_CUSTOM_TEMPLATE" => "N",
                "LIST_URL" => "result_list.php",
                "SEF_MODE" => "N",
                "SUCCESS_URL" => "",
                "USE_EXTENDED_ERRORS" => "N",
                "VARIABLE_ALIASES" => array("RESULT_ID" => "RESULT_ID", "WEB_FORM_ID" => "WEB_FORM_ID"),
                "WEB_FORM_ID" => "3"
            )
        ); ?>
    </div>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>