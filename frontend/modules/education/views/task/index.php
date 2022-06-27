<?php

/** @var yii\web\View $this */
/** @var array $listTask list of lessons */

$this->title = 'My Yii Application';

use yii\helpers\Html;
use yii\helpers\Url;
$i = 0;
?>

<?php if(!empty($listTask)): ?>

        <?php foreach ($listTask as $key => $item): ?>
        <?php if($key%2==0): ?>
        <div class="row align-items-md-stretch p-2">
        <?php endif; ?>
        <div class="col-md-6">
            <div class="h-100 p-5 <?= ($i%3==0)? 'text-white bg-secondary': 'bg-light border' ?> rounded-3">
                <h2><?= $item['title']; ?></h2>
                <h4>Лекция #<?= $key+1; ?></h4>
                <p><?= $item['description']; ?></p>
                <a href="<?= Url::to(['/education/task/view', 'id' => $key])?>" class="">
                    <button class="btn <?= ($i%3==0)? 'btn-outline-light': 'btn-outline-secondary' ?>" type="button">Перейти</button>
                </a>
            </div>
        </div>
        <?php ($i==3)? $i=0:$i++; ?>
        <?php if($key%2==1): ?>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
<?php endif; ?>





