
        <div class="container">
            <div class="col-lg-12">
                <div class="header">
                    <?php
                    while ($row = $discipline_tb->rez->fetch_assoc()) {
                    ?>
                    <div class="header-top">
                        <input class="inp-info group" name="name_discipline" type="text" placeholder="Полное название" value="<?=$row['name_discipline']?>">
                        <input class="inp-info group center" name="short_name_discipline" type="text" placeholder="Короткое название" value="<?=$row['short_name_discipline']?>">
                        <button class="btn-def btn-del cub" type="submit" name="del_discp" value="<?=$row['id_discipline']?>">
                            <i class="fas fa-trash-alt cub"></i>
                        </button>
                        <button class="btn-def btn-save cub" type="submit" name="save_discp" value="<?=$row['id_discipline']?>">
                            <i class="fas fa-save cub"></i>
                        </button>
                    </div>
                    <?php }?>
                    <div class="bottom-top">

                    </div>
                </div>

                <div class="hr"></div>

                <form method="post">
                    <input class="inp-info group" name="name_discipline" type="text" placeholder="Полное название" >
                    <input class="inp-info group center" name="short_name_discipline" type="text" placeholder="Короткое название" >
                    <button class="btn-def cub" type="submit" name="add_disp">
                        <i class="fas fa-plus cub"></i>
                    </button>
                    <select class="selections  group" name="selects_teacher_in_db">
                        <?php
                        foreach ($discipline_tb->discipline_list_array as $row) { ?>
                            <option  value="<?=$row['id_teacher']?>"><?=$row['name_teacher']?></option>
                        <?php  }  ?>
                    </select>

                    <select class="selections  group" name="selects_group_in_db">
                        <?php
                        foreach ($discipline_tb->discipline_list_array as $row) { ?>
                            <option  value="<?=$row['id_group']?>"></option>
                        <?php  }  ?>
                    </select>
                </form>
            </div>
        </div>
