<?php

/** @var yii\web\View $this */
/** @var array $listExamples list of examples */

$this->title = 'My Yii Application';

use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php if(!empty($listExamples)): ?>
    <ul class="list-group list-group-flush">
    <?php foreach ($listExamples as $item): ?>
        <li class="list-group-item">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['title']; ?></h5>
                    <p class="card-text"><?= $item['description']; ?></p>
                    <a href="<?= Url::to(['/education/example/'.$item['id']])?>" class="btn btn-primary">Посмотреть</a>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>



