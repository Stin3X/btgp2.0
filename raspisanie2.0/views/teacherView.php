
<div class="teach">
    <div class="logo-header-pos">
        <span class="logo-header group">Преподаватели</span>
    </div>
    <div class="wrappers">

<?php
        while ($row = $teacher_tb->rez->fetch_assoc()) {
            print_r($row);
 ?>


    <form method="post">
        <div class="info-top teacher">
            <input name="name_teacher" class="name-learn teacher" type="text" placeholder="ФИО преподавателя" value="<?=$row['name_teacher']?>">
            <div class="bnt-teach-wr">
                <button class="btn-teacher save" type="submit" name="save_teacher"  value="<?=$row['id_teacher']?>">
                    <i class="fas fa-save"></i>
                </button>
                <button class="btn-teacher del" type="submit" name="del_teacher" value="<?=$row['id_teacher']?>">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
    </form>
<?php
        }
?>

        <form method="post">
            <div class="bottom teacher">
                <input class="name-learn teacher" type="text" name="name_teacher" placeholder="ФИО преподавателя">
                <button class="btn-teacher dob" type ="submit" name="add_teacher">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </form>
    </div>
</div>