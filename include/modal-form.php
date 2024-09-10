<div class="modal__item body-click-content" data-content="<?=$type?>">
    <div class="modal__close body-click-close"></div>
    <div class="modal__item-title text_fz20 text_center">
        <h3><?=$title?></h3>
        <?php if (isset($descr)) : ?>
            <p><?=$descr?></p>
        <?php endif; ?>
    </div>
    <form action="/ajax/forms.php" class="form" data-success="<?=$success?>">
        <input type="text" name="feedsection" value="<?=$section?>" hidden>
        <input type="text" name="feedtheme" value="<?=$title?>" hidden>

        <div class="form-col">
            <?php if ($type != 'error') : ?>
                <label class="form-label">
                    <span class="text_fz18">Ваше имя</span>
                    <input type="text" name="feedname" placeholder="Иван Иванов" required>
                </label>
            <?php endif; ?>
            <?php if ($type == 'error') : ?>
                <label class="form-label">
                    <span class="text_fz18">Комментарий</span>
                    <textarea name="feedcomment" required></textarea>
                </label>
            <?php endif; ?>
            <label class="form-label">
                <span class="text_fz18">Телефон</span>
                <input type="tel" name="feedphone" placeholder="+7 (___) ___-__-__" required>
            </label>
            <?php if ($type != 'error') : ?>
                <label class="form-label">
                    <span class="text_fz18">Email</span>
                    <input type="email" name="feedemail" placeholder="Email" required>
                </label>
            <?php endif; ?>
            <div class="form-label">
                <button class="btn text_fz20">
                    <span class="text_fw700">Отправить</span>
                    <img src="<?=IMAGES_PATH?>icons/arrow-small.svg" alt="">
                </button>
            </div>
        </div>
        <div class="form-ps text_center text_fz14 text_fw300">
            Нажимая «Отправить», вы соглашаетесь с&nbsp;<a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
        </div>
    </form>
</div>