<?php
$this->params['breadcrumbs'] = [
    ['label'=>'user add','url'=>['user/add']],
    ['label'=>'user list'],
];
?>
<table class="table table-bordered table-condensed table-hover table-striped">
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>年龄</th>
    </tr>
    <?php foreach($list as $row):?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['age'];?></td>
    </tr>
    <?php endforeach;?>
</table>