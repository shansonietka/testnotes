<h2><?php //echo $name ?></h2>

<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<head>

</head>
<body>






                <?php echo form_open('checklist/Bind_numbers') ?>
                    <div class="container-fluid">
                    <div  align="left">
                    <div   class="form-group">


                        <legend>Привязка номера менеджером через GAPI</legend>
                        <label for="title">Логин клиента</label><br />
                        <input type="input" name="agent_login" placeholder="agent_login"  /></textarea><br /><br />
                        <label for="title">Пароль клиента</label<br />
                        <input type="input" name="agent_" placeholder="SMSTestPP"  /></textarea><br /><br />
                        <label for="text">Номер</label><br />
                        <input type="input" name="number" placeholder="7958*******"  /></textarea><br /><br />
                        <label for="text">Направление</label><br />
                        <input type="input" name="direction" placeholder="IN\ALL\OUT"  /></textarea><br /><br />
                        <label for="text">Метод</label><br />
                        <input type="input" name="method" placeholder="GET\POST"  /></textarea><br /><br />
                        <label for="text">Контроллер</label><br />
                        <input type="input" name="controller" placeholder="https*****"  /></textarea><br /><br />

                        <button type="submit" name="submit" class="btn btn-primary" value="Bind numbers"  >Bind</button><br />
                        </div>
                        <br /><label for="text">Ответ</label><br />
                    </div>
                  </body>
                  </html>


