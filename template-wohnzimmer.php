<?php
/*
 * Template Name: Wohnzimmer
 */
?>

<?php get_header(); ?>

<div class="offers" ng-controller="OfferCtrl">
    <form name="offerForm" action="#" novalidate>
        <div>Ich,&nbsp;<input tabindex="1" type="text" ng-model="offer.name" class="name" autofocus="autofocus" required>&nbsp;biete&nbsp;<input tabindex="2" type="text" ng-model="offer.offer" class="activity" required>&nbsp;von&nbsp;<select tabindex="3" ng-model="offer.from" ng-options="hour + ':00' for hour in [] | range:10:offer.to+1" lower-than="{{ offer.to }}" name="from"></select>&nbsp;bis&nbsp;<select tabindex="4" ng-model="offer.to" ng-options="hour + ':00' for hour in [] | range:offer.from:20"></select>&nbsp;Uhr. <button tabindex="5" type="button" ng-click="addOffer()"  ng-disabled="offerForm.$invalid">Eintragen</button></div>
    </form>

    <span class="error" ng-show="offerForm.from.$dirty && offerForm.from.$error.lowerThan">
        Der Start muss vor dem Ende liegen.
    </span>

    <ul class="list">
        <li ng-repeat="offer in offers | orderByPriority"><span class="time">{{ offer.from }}:00 - {{ offer.to }}:00</span><span class="activity">{{ offer.name }} bietet {{ offer.offer }}.</span></li>
    </ul>
</div>

<div class="hug page-content units-row">

    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>

        <?php the_content(); ?>
                
        <?php
            endwhile;

        else :
            echo "Something is going wrong.";

        endif;
    ?>

</div>

<?php get_footer(); ?>