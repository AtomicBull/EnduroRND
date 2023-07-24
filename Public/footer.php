    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <!-- колонка навигации -->
                <div class="footer-nav">
                    <ul class="footer-list">
                        <?php
                        if ($current_page === '/functions/rent_form.php' || $current_page === '/functions/certificate_form.php') {
                            // выводим ссылку на index.php
                            echo ' <li><a href="../index.php#motopark">Мотопарк</a></li>';
                            echo '<li><a href="../index.php#Certificate">Сертификат</a></li>';
                            echo '<li><a href="../index.php#Contacts">Контакты</a></li>';
                        } else {
                            // выводим ссылку, которая приведет к секции #motopark на index.php
                            echo '<li><a href="#motopark">Мотопарк</a></li>';
                            echo '<li><a href="#Certificate">Сертификат</a></li>';
                            echo ' <li><a href="#Contacts">Контакты</a></li>';
                        }
                        ?>
                    </ul>

                </div>
                <div class="footer-privacy">
                    <a href="#">2022 Enduro RND &copy;
                    </a>
                    <a href="#">Согласие на обработку "куки"
                    </a>

                </div>
            </div>
            <div class="btn-up btn-up_hide"></div>
        </div>
    </footer>

    <!-- Скрипт для кнопки вверх -->
    <script src="../Js/scroll_button.js"></script>
    <!-- Скрипт для бургерного меню -->
    <script src="../Js/script.js" defer></script>
    </body>

    </html>