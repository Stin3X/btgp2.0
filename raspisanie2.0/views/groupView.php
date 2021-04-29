

        <div class="container">
            <div class="col-lg-12">
                <div class="logo-header-pos">
                    <span class="logo-header group">
                        Группы
                    </span>
                 </div>   
                <div class="header group">
                    <form method="post">
                        <?php
                        while ($row = $group_tb->rez->fetch_assoc()) {
                        ?>

                    <div class="group-pos">

                        <div class="left-block group">
                            <span class="logo-name group">
                                Курс
                            </span>


                            <?=$row['kurs']?>
                        </div>
                        <div class="right-block  group">
                            <span class="logo-name  group">Специальность</span>

                            <?=$row['name_speciality']?>
                        </div>
                        <div class="bnt-block  group">
                            <div class="post">
                                <button class="bnt  group" type="submit" name="del_group" value="<?=$row['id_group']?>">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    </form>
                </div>
            </div>      
        </div>        
    </header>
    <div class="hr"></div>
    <form method="post">
        <div class="container">
            <div class="col-lg-12">
                        <div class="header group">
                            <div class="group-pos">
                                <div class="left-block  group">
                                    <select class="selections  group" name="select_kurs">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="right-block">
                                    <select class="selections  group" name="selects_group">
                                        <?php
                                        foreach ($group_tb->speciality_list_array as $row) { ?>
                                            <option  value="<?=$row['id_speciality']?>"><?=$row['name_speciality']?></option>
                                        <?php  }  ?>
                                    </select>
                                </div>
                                <div class="bnt-block form  group">
                                    <div class="post">
                                        <button class="bnt form  group" type="submit" name="add_group">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div> 
                            </div>    
                        </div>   
            </div>         
        </div>                                
    </form>
