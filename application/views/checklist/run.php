<h2><?php //echo $name ?></h2>

<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<head>

</head>
<body>






                <?php echo form_open('checklist/create') ?>
                    <div class="container-fluid">
                    <div  align="left">
                    <div   class="form-group">
                        <form>

                        <legend>Создание чеклиста</legend>
                        <label for="title">Название</label><br />
                        <input type="input" name="ch_name" style="width: 20%;" class="form-control" required /></textarea><br /><br />

                        <label for="title">Список проверок</label><br />
                            <div id=divf>


                            <input type=button class="btn btn-link" value="+" onclick=plus()>
                    </div>
                        <script>
                            var n=0
                            function plus(){
                                document.getElementById('divf').innerHTML+='<br><br> <input type=text style="width: 50%;"  wrap="off" class="form-control" id="id\'+n+\'" name="step\'+n+\'"  rows="1" required>'
                                n++

                            }
                        </script>
                  <br />
                        <br />
<!--                            <input type=text id="id'+n+'" name="step'+n+'">-->

                            <button type="submit" name="submit" class="btn btn-primary" value="create checklist"  >Создать</button>
                        </form>
                        </body>
                        </html>






                    </div>
                        </body>
                        </html>

                    </div>
                  </body>
                  </html>


