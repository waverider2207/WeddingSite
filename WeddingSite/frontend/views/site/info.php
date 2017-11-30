<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Venue Information';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Write everything in the custom-body section -->
<div class="custom-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <hr class="header"/>
    <?php
    if (Yii::$app->user->isGuest) {
        /* If a guest, display only the reception time */
        ?>
        <div>
            <h3>La Cabana <small> - Reception, Goa, India. <strong>Time</strong>: 7pm Saturday, January 27th</small></h3>
            <div class="row">
                <div class="col-md-7 text-justify">
                    <h4>Address:</h4><small>Ashvem Beach, Ashvem Wada, Mandrem, Goa 403527, India.</small><br />
                    <h4>The story:</h4> 
                    Ok, so La Cabana was already on our minds when we were looking for a Goa venue. Mom and dad dashed around quite a bit for 
                    alternatives before we settled on this one. This beat Marquis, Goan Heritage hotel, Riva, Safira, Bay 15 and Pratibha in Dona Paula.
                    Cost, privacy, appearance and amenities provided factored into our decisions.<br/>
                    Lots of whatsapp messages, emails and calls later, we were pretty comfortable that this venue best met all our needs. With a sigh of relief,
                    we booked this place.
                    <h4>The Attire:</h4><br/>
                    Reception: Semi Formals / Casuals. There will be a beach nearby. Dinner and a live band.
                </div>
                <div class="col-md-5">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15368.186398006514!2d73.7197661!3d15.6425068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f2ddb1c1db5d407!2sLa+Cabana+Beach+%26+Spa!5e0!3m2!1sen!2sus!4v1503503742611" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                </div>
                
            </div>
        </div>
    <?php
    } else {
        /* If a logged in user, display the wedding and reception time */
        ?>
        <div>
            <h3>La Cabana <small> - Wedding and Reception, Goa, India. <strong>Time</strong>: 5:00 pm Saturday, January 27th</small></h3>
            <div class="row">
                <div class="col-md-7 text-justify">
                    <h4>Address:</h4><small>Ashvem Beach, Ashvem Wada, Mandrem, Goa 403527, India.</small><br />
                    <h4>The story:</h4>
                    Ok, so La Cabana was already on our minds when we were looking for a Goa venue. Mom and dad dashed around quite a bit for 
                    alternatives before we settled on this one. This beat Marquis, Goan Heritage hotel, Riva, Safira, Bay 15 and Pratibha in Dona Paula.
                    Cost, privacy, appearance and amenities provided factored into our decisions. <br />
                    Lots of whatsapp messages, emails and calls later, we were pretty comfortable that this venue best met all our needs. With a sigh of relief,
                    we booked this place. 

                    <h4>The Attire:</h4><br/>
                    Wedding: Formal. The ceremony will be on a lawn, so no worries about sand. <br/>
                    Reception: Semi Formals / Casuals. There is a beach nearby. Dinner and a live band.
                </div>
                <div class="col-md-5">
                    <!-- 4:3 aspect ratio -->
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" 
                              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15368.186398006514!2d73.7197661!3d15.6425068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f2ddb1c1db5d407!2sLa+Cabana+Beach+%26+Spa!5e0!3m2!1sen!2sus!4v1503503742611" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                </div>
                
                
            </div>
        </div>
<?php } ?>

    <hr class="subheader" />

    <div>
        <h3>Discover Portsmouth Center <small> - Reception, Portsmouth, NH, US. <strong>Time</strong>: 5:00 pm Thursday, February 8th</small></h3>
        <div class="row">
            <div class="col-md-7 text-justify">
                <h4>Address:</h4><small>10 Middle Street, Portsmouth, NH 03801.</small><br />
                <h4>The story:</h4>
                While the venue search was underfoot in India, Audrey took on the lead of hunting down a venue for the winter reception here. 
                There were talks of barns, farmhouses and so many other kinds of places. While I was at work on Tuesday, 22nd of August, I got a 
                text stating she'd like me to checkout this place she had just scouted. It was in Portsmouth and I headed there while she put some change
                in the meter. <br/>
                It was something both of us liked immediately. In the heart of winter, this would be warm, central and with plenty of parking just nearby. 
                It is on the second floor, with space for setting up food and an inner room for a video and activities.

                <h4>The Attire:</h4><br/>
                Reception: Smart Casuals. There will be light food and music. 
            </div>
            <div class="col-md-5">
                <!-- 4:3 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11657.541678689127!2d-70.7608923!3d43.0753918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb45055b2c6a95566!2sDiscover+Portsmouth+Center!5e0!3m2!1sen!2sus!4v1503514651977" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            
            
        </div>
    </div>


</div>