<?php
//while ($row = $conf_tb->rez->fetch_assoc()) {
//    print_r($row);
//}
$row = $conf_tb->rez->fetch_assoc();
?>
<div class="container">
    <div class="col-lg-12">

            <div class="logo-header-pos">
                <span class="logo-header group">Конфигурация</span>
            </div>
            <div class="mid">
                <div class="mid-pos">
                    <form method="POST">
                    <div class="mid-content">
                        <span class="mid-text">Название ОО</span>
                        <input  class="inp-info group" type="text" name="name_oo" placeholder="Введите" value="<?=$row['name_oo']?>">
                    </div>
                    <div class="mid-content">
                        <span class="mid-text">ФИО Заведующего</span>
                        <input  class="inp-info group" type="text" name="name_zav" placeholder="Введите"  value="<?=$row['name_zav']?>">
                    </div>
                    <div class="mid-content bnt">
                        <button type="submit" class="bnt-mid dob" name="add_conf">Сохранить</button>
                        <button class="bnt-mid del name="cancel_conf">Отменить</button>
                    </div>
                    </form>

                </div>
            </div>
    </div>
</div>
