<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <div class="form-signin">
        <?php $form = ActiveForm::begin(['class' => 'form-signin']); ?>
        <h2 class="form-signin-heading">Please login</h2>
        <?= $form->field($model, 'username',
            ['options' =>
                ['tag' => 'div', 'class' => 'form-group has-feedback required margin_bottom_0'],
                'template' => '{input}<i class="glyphicon glyphicon-user form-control-feedback"></i>{hint}'
            ]
        )->textInput([
            'placeholder' => 'Username',
            'autofocus' => true]) ?>

        <?= $form->field($model, 'password',
            ['options' =>
                ['tag' => 'div', 'class' => 'form-group has-feedback required margin_bottom_0'],
                'template' => '{input}<i class="glyphicon glyphicon-lock form-control-feedback"></i>{hint}'
            ]
        )->passwordInput(['type' => 'password', "placeholder" => "Password"]) ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
