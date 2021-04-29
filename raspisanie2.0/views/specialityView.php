            <div class="logo-header-pos">
                <span class="logo-header group">Специальности</span>
            </div>

            <?php
            while ($row = $speciality_tb->rez->fetch_assoc()) {
                ?>

                <form method="post">
                    <div class="header-top spec">
                        <input class="inp-info group" type="text" name="name_speciality" value="<?=$row['name_speciality']?>" placeholder="Полное название">
                        <input class="inp-info group center" type="text" name="short_name_speciality" value="<?=$row['short_name_speciality']?>" placeholder="Введите">
                        <button class="btn-def btn-save cub" name="save_spec" value="<?=$row['id_speciality']?>">
                            <i class="fas fa-save cub"></i>
                        </button>
                        <button class="btn-def btn-del cub" name="del_spec" value="<?=$row['id_speciality']?>">
                            <i class="fas fa-trash-alt cub"></i>
                        </button>
                    </div>
                </form>

                <?php
            }
            ?>



        <div class="hr"></div>
        <form method="post">
            <div class="header-top spec">
                <input class="inp-info group" type="text" name="name_speciality" value="" placeholder="Полное название">
                <input class="inp-info group center" type="text" name="short_name_speciality" value="" placeholder="Короткое название">
                <button class="btn-def cub" name="add_spec" value="Добавить">
                    <i class="fas fa-plus cub"></i>
                </button>
            </div>
        </form>
