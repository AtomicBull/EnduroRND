 <?php
    //Подкючение к бд
    require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

    //Подготовка запроса
    $sql = $pdo->prepare("SELECT model FROM motopark");
    $sql->execute();
    //Метод fetchAll() возвращает все строки результата запроса в виде многомерного массива.
    $results = $sql->fetchAll(PDO::FETCH_OBJ);
    ?>
 <section class="RentForm" id="RentForm">
     <div class="container">
         <div class="RentForm-inner">
             <div class="titles">
                 <h2>Заявка на прокат</h2>
             </div>
             <form class="Form" action="../functions/rent_form.php" method="post">
                 <div class="RentForm_item">
                     <input placeholder="Имя" class="RentForm_input" type="text" name="renter_name" required />
                 </div>

                 <div class="RentForm_item">
                     <input placeholder="+7 (999) 999-99-99" class="RentForm_input" type="tel" pattern="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$" name="renter_phone" required />
                 </div>
                 <div class="RentForm_item">
                     <select class="RentForm_input" name="renter_model" required>
                         <?php foreach ($results as $result) : ?>
                             <option value="<?php echo $result->model ?>"><?php echo $result->model ?></option>
                         <?php endforeach; ?>
                     </select>
                 </div>
                 <div class="RentForm_item">
                     <input placeholder="Дата" class="RentForm_input" type="date" name="renter_date" required />
                 </div>
                 <div class="RentForm_item">
                     <select class="RentForm_input" name="renter_time" required>
                         <option value="1.5 часа">1.5 часа</option>
                         <option value="2 часа">2 часа</option>
                         <option value="2.5 часа">2.5 часа</option>
                         <option value="3 часа">3 часа</option>
                     </select>
                 </div>


                 <button type="submit" class="RentForm_button">Записаться</button>
             </form>
         </div>
     </div>
 </section>