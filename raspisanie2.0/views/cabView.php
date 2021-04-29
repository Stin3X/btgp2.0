<form method="post">
        <fo class="header cub">
            <span class="logo-web cub">
                Кабинеты
            </span>
            <div class="th">
                <span class="td-top cub">
                    Номер кабинета
                </span>
                <span class="td-top cub" >
                    Название кабинета
                </span>
                <span class="td-top cub">
                    Закрепленна Группа
                </span>
                <span class="td-top cub ends">
                    Действие
                </span>
            </div>
            <?php
            while ($row = $cabinet_tb->rez->fetch_assoc()) {
            ?>
                    <div class="col-row cub">
                        <input class="inp-info cub"  name="number_cabinet" value="<?=$row['number_cabinet']?>" placeholder="Введите номер">
                        <input class="inp-info cub"  name="name_cabinet" value="<?=$row['name_cabinet']?>" placeholder="Введите название">
                        <input class="inp-info cub" name="group_id_group" value="" placeholder="Введите группу">
                        <div class="bnt-icon">
                            <button class="btn-def btn-del cub" type="submit" name="del_cab" value="<?=$row['id_cabinet']?>">
                                <i class="fas fa-trash-alt cub"></i>
                            </button>
                            <button class="btn-def btn-save cub" type="submit" name="save_cab" value="<?=$row['id_cabinet']?>">
                                <i class="fas fa-save cub"></i>
                            </button>
                        </div>
                    </div>
                <?php
            }
            ?>
</form>
            <hr>
            <form method="post">
                <div class="col-row cub">
                    <input class="inp-info cub" name="number_cabinet" placeholder="Введите номер">
                    <input class="inp-info cub" name="name_cabinet" placeholder="Введите название">
                    <input class="inp-info cub" name="group_id_group" placeholder="Введите группу">
                    <div class="bnt-icon">
                        <button class="btn-def cub" type="submit" name="add_cab">
                            <i class="fas fa-plus cub"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
