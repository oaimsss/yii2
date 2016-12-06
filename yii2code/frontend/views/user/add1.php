<form action="index.php?r=user/save" method="post">
    <input name="<?php echo \Yii::$app->request->csrfParam;?>" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>姓名</th>
            <td><input type="text" name="name" value=""/></td>
        </tr>
        <tr>
            <th>年龄</th>
            <td><input type="text" name="age" value=""/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value=" 添加 " class="btn btn-primary"/></td>
        </tr>
    </table>
</form>