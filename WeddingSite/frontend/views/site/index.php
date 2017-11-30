<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'The Wedding Site - Home';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">We're glad to have you join us for our special occasion. </p>

    </div>

            
    <div class="col-lg-12 text-justify">
        <?= Html::img('@web/images/DonAud.png', 
                    ['class'=>'img-fluid img-responsive center-block', 'alt'=>'Donald and Audrey', 'title'=>'The Crafty Ksingers']);?>
    </div>
    <?php /*
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>A serendipitous meeting</h2>

                <p>How did we get to meet each other? It was quite a series of improbable events.</p>

                <p><a class="btn btn-default" href="/site/about">About Us &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Time to travel</h2>

                <p>The wedding location. Make sure you know what to expect!</p>

                <p><a class="btn btn-default" href="/site/plan">Plan it &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Lost?</h2>

                <p>Do reach out to us and we will get back to you as soon as possible.</p>

                <p><a class="btn btn-default" href="/site/contact">Contact Us &raquo;</a></p>
            </div>
        </div>

    </div>
   */ ?>

</div>
