<section class="Certificate" id="Certificate">
    <div class="container">
        <div class="titles">
            <h2>Подарочный сертификат</h2>
        </div>
        <div class="Certificate-inner">

            <div class="card">
                <img src="./Img/Certificate.png" alt="Certificate">
            </div>

            <form class="Certificate_Form" action="../functions/certificate_form.php" method="post">
                <div class="Certificate_text">
                    <p>Сертификат включает обучение и сопровождение инструктора, полную экипировку, прокат
                        питбайка
                        на 2
                        часа</p>
                    <br>
                    <p>Стоимость — 3000 рублей. Срок действия — 6 месяцев. Отправляем сертификат в электронном
                        виде,
                        при
                        желании можно
                        распечатать и подарить.</p>
                </div>
                <div class="CertificateForm_item">
                    <input placeholder="Введите ваше имя" class="CertificateForm_input" type="text" name="user_name" required />
                </div>

                <div class="CertificateForm_item">
                    <input placeholder="8 (999) 999-99-99" class="CertificateForm_input" type="tel" pattern="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$" name="user_phone" required />
                </div>

                <div class="CertificateForm_item">
                    <input placeholder="Адрес электронной почты" class="CertificateForm_input" type="email" name="user_email" required />
                </div>


                <button type="submit" class="CertificateForm_button">Оставьте заявку</button>
            </form>


        </div>
    </div>
</section>