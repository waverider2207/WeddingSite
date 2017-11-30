<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-body">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr class="header" />
    <div class="row">
        <div class="col-lg-12 text-justify"> <!-- Donny's section -->
            <h4> However did we meet? <small>It was quite the series of improbable events</small></h4><br />
            <strong>Donald:</strong> So I know  this guy called Jeff Heim, an excellent composer. We got along because we have similar interests like hiking, 
            winter sports, music and so on. At one point, he introduced me to Diana and Roland since I liked to dance - and they were a lovely 
            couple that liked to host and teach salsa. Pretty soon you could find me there on salsa evenings, being, you know, cool. <br/><br/>
            <strong>Audrey:</strong> I knew Diana and Roland from church, and it was the first time I was going to go salsa dancing. But oh my,
            when I walked in, I saw Donald and fell madly in love. I thought that I'd be rational and composed, but that flew out of the window.<br/><br/>
            <strong>Donald:</strong> Then we decided to get married because it was that easy. Ta-da! <br/><br/>
            <strong>Audrey:</strong> [talk to me for the real story] <br/><br/>
            <strong>Donald:</strong> whaaa??....
        </div>
        <div class="col-lg-12 text-justify">
            <?= Html::img('@web/images/DonAudMtnTop.png', 
                    ['class'=>'img-fluid img-responsive center-block', 'alt'=>'On the Lafayette Summit', 'title'=>'The Lafayette Summit on Franconia Ridge']);?>
            
            <hr class="subheader" />
        </div>
        <div class="col-md-6">
            <h3>Donald:</h3> Indian here - though most folks mistake me for a citizen of another south east Asian country. If I appear way 
            too positive and "bubbly," that's because of Marion's (my sis) influence. I like to travel and explore 
            new places, likely because of my parents - who are quite the explorers themselves. Ask me about my trip to Nepal.<br />My love of 
            music and hiking has found a companion in Audrey. I'm a pretty chilled out guy and on a relaxing day, you'll catch me reading a book or 
            playing a guitar.
        </div>
        <div class="col-md-6">
            <h3>Audrey:</h3> Never been outside the borders of the good old USA...marrying a globe trotter. There will be adventures, planned and unplanned! 
            Youngest of 4 - ask Kayla (my partner in crime) if you want the dirt on me. Grew up in NH with a healthy love of mountains and oceans, went to 
            college in MN, and came back to teach piano. My students put up with me:). I'm especially susceptible to cups of tea and classic mysteries, 
            especially when paired together. 
        </div>
        
        
    </div>
</div>
