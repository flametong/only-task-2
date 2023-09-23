<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php if ($arResult["isFormErrors"] == "Y"): ?>
    <?= $arResult["FORM_ERRORS_TEXT"]; ?>
<?php endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<?php if (!empty($arResult)): ?>
    <form
            class="contact-form__form"
            name="SIMPLE_FORM_3"
            action="/"
            method="POST"
            enctype="multipart/form-data"
    >

        <input type="hidden" name="sessid" id="sessid" value="832d235c5b0b8c40fadc252f661ec3c2" />
        <input type="hidden" name="WEB_FORM_ID" value="3" />
        <input type="hidden" name="lang" value="ru" />

        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_name">
                    <div class="input__label-text">
                        Ваше имя<span class='form-required starrequired'>*</span>
                    </div>
                    <input
                            type="text"
                            id="medicine_name"
                            class="input__input"
                            name="form_text_5"
                            value=""
                            required=""
                    />
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>

            <div class="input contact-form__input">
                <label class="input__label" for="medicine_company">
                    <div class="input__label-text">
                        Компания/Должность<span class='form-required starrequired'>*</span>
                    </div>
                    <input
                            type="text"
                            id="medicine_company"
                            class="input__input"
                            name="form_text_6"
                            value=""
                            required=""
                    />
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>

            <div class="input contact-form__input">
                <label class="input__label" for="medicine_email">
                    <div class="input__label-text">
                        Email<span class='form-required starrequired'>*</span>
                    </div>
                    <input
                            type="text"
                            id="medicine_email"
                            class="input__input"
                            name="form_email_7"
                            value=""
                            required=""
                    />
                    <div class="input__notification">Неверный формат почты</div>
                </label>
            </div>

            <div class="input contact-form__input">
                <label class="input__label" for="medicine_phone">
                    <div class="input__label-text">
                        Номер телефона<span class='form-required starrequired'>*</span>
                    </div>
                    <input
                            type="tel"
                            id="medicine_phone"
                            class="input__input"
                            name="form_text_8"
                            data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'"
                            maxlength="12"
                            x-autocompletetype="phone-full"
                            value=""
                            required=""
                    />
                </label>
            </div>
        </div>

        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="medicine_message">
                    <div class="input__label-text">
                        Сообщение
                    </div>
                    <textarea
                            type="text"
                            id="medicine_message"
                            class="input__input"
                            name="form_textarea_9"
                            value=""
                    ></textarea>
                </label>
            </div>
        </div>

        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">
                Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия «Согласия на&nbsp;обработку персональных
                данных».
            </div>
            <input
                    class="form-button contact-form__bottom-button"
                    data-success="Отправлено"
                    data-error="Ошибка отправки"
                    type="submit"
                    name="web_form_submit"
                    value="<?= $arResult["arForm"]["BUTTON"] ?>"
            />
        </div>
    </form>
<?php endif; ?>
