 <div class="container">
            <div class="col-lg-12">

                <?php
                $row = $users_tb->rez->fetch_assoc();
                print_r($_POST);
                ?>
                <form method="post">
                    <div class="logo-header-pos">
                        <span class="logo-header group">Пользователи</span>
                    </div>
                    <div class="mid">
                        <div class="mid-pos">
                            <div class="mid-content">
                                <span class="mid-text">Имя пользователя</span>
                                <input class="inp-info group" type="text" name="user_name"  placeholder="Введите" required="">
                            </div>
                            <div class="mid-content">
                                <span class="mid-text">Логин</span>
                                <input class="inp-info group" type="text" name="login" placeholder="Введите" required="">
                            </div>
                            <div class="mid-content">
                                <span class="mid-text">Пароль</span>
                                <input class="inp-info group" type="password" name="password" placeholder="Введите" required="">
                            </div>
                            <div class="mid-content">
                                <span class="mid-text">Адресная почта</span>
                                <input class="inp-info group" type="email" name="email" placeholder="Введите" required="">
                            </div>
                            <div class="mid-content">
                                <span class="mid-text">Телефон</span>
                                <input class="inp-info group" type="text" name="phone" placeholder="Введите" required="">
                            </div>
                            <div class="mid-content bnt">
                                <button class="bnt-mid dob" type="submit" name="add_user">Добавить</button>
                                <button class="bnt-mid del" type="submit">Отменить</button>
                            </div>
                         </div>   
                    </div>
                </form>
            </div>    
        </div>