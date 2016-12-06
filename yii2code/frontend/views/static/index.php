<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */
use frontend\assets\DemoAsset;

DemoAsset::register($this);
//$this->clear();
$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->head() ?>
        <script type="text/javascript" src="a.js">
        </script>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <div class="container">
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
