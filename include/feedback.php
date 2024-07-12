<section class="home__feedback page__block pt100">
    <div class="container">
        <div class="home__feedback-title elem_animate bott">
            <h2 class="text_fz36 text_color">Давайте обсудим ваш проект</h2>
            <span>Оставьте заявку и&nbsp;мы свяжемся с&nbsp;вами в&nbsp;ближайшее время для&nbsp;обсуждения деталей</span>
        </div>
        <form action="/ajax/forms.php" class="home__feedback-form form elem_animate top" data-success="save">
            <input type="text" name="feedsection" value="1" hidden>
            <input type="text" name="feedtheme" value="Заявка на обсуждение проекта" hidden>

            <div class="form-row">
                <label class="form-label">
                    <span class="text_fz18 text_fw600">Ваше имя</span>
                    <input type="text" name="feedname" placeholder="Иван Иванов" required>
                </label>
                <label class="form-label">
                    <span class="text_fz18 text_fw600">Телефон</span>
                    <input type="tel" name="feedphone" placeholder="+7 (___) ___-__-__" required>
                </label>
                <label class="form-label">
                    <span class="text_fz18 text_fw600">Email</span>
                    <input type="email" name="feedemail" placeholder="Email" required>
                </label>
                <div class="form-label">
                    <button class="btn text_fz20">
                        <span class="text_fw700">Отправить</span>
                        <img src="<?=IMAGES_PATH?>icons/arrow-small.svg" alt="">
                    </button>
                </div>
            </div>
            <div class="form-ps text_fz14 text_center">
                Нажимая «Отправить», вы соглашаетесь с&nbsp;<a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
            </div>
        </form>
    </div>
</section>