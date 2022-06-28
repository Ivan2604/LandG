<?php

/** @var yii\web\View $this */
/** @var integer $id id of lesson */
/** @var array $taskList list of tasks */
/** @var array $dzList list of dz */
/** @var string $lessonTitle title of lesson */

$this->title = $lessonTitle;

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="/education/images/bootstrap-logo-white.svg" alt="" width="48" height="38">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Проработка лекции "<?= $this->title ?>"</h1>
        <small>изучаем javascript</small>
    </div>
</div>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Задания на изучение</h6>
    <?php if(!empty($taskList)): ?>
        <?php foreach ($taskList as $key => $item): ?>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="30%" y="50%" class="text-white" dy=".3em"></text></svg>

                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">id-<?= $key ?>. <?= $item; ?></strong>
                        <a href="<?= Url::to(['/education/task/template', 'id' => $key]) ?>">Смотреть пример</a>
                    </div>
<!--                    <span class="d-block">@username</span>-->
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Домашние задания</h6>
    <?php if(!empty($dzList)): ?>
        <?php foreach ($dzList as $key => $item): ?>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"></rect><text x="30%" y="50%" class="text-white" dy=".3em"></text></svg>

                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">id-<?= $key ?>. <?= $item['title']; ?></strong>
                        <a href="<?= Url::to(['task/dz', 'id' => $key, 'task' => $item['parrentTask']]) ?>">Перейти</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>







