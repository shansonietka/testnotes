<h2></h2>
<h2><?php //echo $name ?></h2>

<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<head>

</head>
<body>

<div class="container-fluid">
    <div  align="left">
    <div class="form-group">
    <label for="title">Все чеклисты</label><br />
    <? foreach($checklist_array as $key=>$value):?></br>
    <input class="form-control" id="readOnlyInput" type="text" style="width: 50%;" placeholder=<?php echo  $value['checklist_name']; ?> readonly="">
        <?php echo form_open('checklist/delete' ) ?>
        <div  align="center"> </br><input type="hidden" name="id" value= "<?php print  $value['id']; ?>"/><button type="submit"  name="submit" class="btn btn-info" value="delete checklist">Удалить</button></br></div>
     <?php endforeach; ?></div>
</div>
</body>
</html>