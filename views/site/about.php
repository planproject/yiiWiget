<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <h4>
            API释义：<a href="https://www.yiichina.com/topic/7657">https://www.yiichina.com/topic/7657</a>
        </h4>
    </p>
    <p style="margin-top: 40px;">
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>

    <?php
        echo \yii\grid\GridView::widget([
            'dataProvider' => $cate_data,
            'rowOptions'=>function($model,$key, $index){
                if($index%2 === 0){
                    return ['style'=>'background:#f1d7e9'];
                }
            },
            'columns'=>[
                [
                    'label'=>'ID',
                    'attribute'=>'id',
                    'format'=>'text',
                    'headerOptions' => ['width' => '20%','class' => 'success'],
                    'contentOptions' => ['style'=>'color:#692a2a'],
                ],
//                'createTime:datetime:生成时间',
                [
                    'headerOptions' => ['class' => 'success'],
                    'label'=>'生成时间',
                    'attribute'=>'createTime',
                    'format'=>'datetime'
                ],
                [
                    'headerOptions' => ['class' => 'success'],
                    'label'=>'名称',
                    'attribute'=>'name',
                    'format'=>'text'
                ],
            ]
        ]);
    ?>
</div>
