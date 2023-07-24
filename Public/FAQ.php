<?php
//Подкючение к бд
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

//Подготовка запроса
$sql = $pdo->prepare("SELECT * FROM faq");
$sql->execute();
//Метод fetchAll() возвращает все строки результата запроса в виде многомерного массива.
$results = $sql->fetchAll(PDO::FETCH_OBJ);
?>


<section class="FAQ" id="FAQ">
    <div class="container">
        <div class="titles">
            <h2>Часто Задаваемые Вопросы</h2>
        </div>
        <div class="FAQ-inner">
            <div class="FAQ-block">

                <?php foreach ($results as $result) : ?>

                    <details>
                        <summary><?php echo $result->question ?></summary>
                        <p class="FAQ-block_text"><?php echo $result->answer ?></p>
                    </details>

                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>