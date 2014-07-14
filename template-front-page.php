<?php
/*
 * Template Name: Startseite
 */
?>

<?php get_header(); ?>

<div class="hug units-row">

    <div class="teaser-wohnzimmer teaser unit-50">
        <h2>Wohnzimmer</h2>
        <div class="map">
            <a href="/wohnzimmer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/map-wohnzimmer.png" alt="Wohnzimmer Karte">
                <div class="overlay"></div>
                <span>Lange Brücke</span>
            </a>
        </div>
        <p>
            Aus dem zur Zeit wegen der angrenzenden Baustelle brach liegenden Raum unter der Brücke wird für einen Tag das Wohnzimmer der größten WG Potsdams. Ein Ort, der sonst nur en passant wahrgenommen wird, bekommt für einen Tag eine neue Bedeutung.
        </p>
        <a href="/wohnzimmer" class="btn btn-offers">Angebote</a>
    </div>

    <div class="teaser-kegelparty teaser unit-50">
        <h2>Kegelparty</h2>
        <div class="map">
            <a href="/kegeln">
                <img src="<?php echo get_template_directory_uri(); ?>/img/map-kegelparty.png" alt="Kanal Karte">
                <div class="overlay"></div>
                <span>Kanal, Yorkstraße</span>
            </a>
        </div>
        <p>
            Die längliche Struktur des Bauwerks bietet sich an als Kegelbahn, dachten wir. Dabei sind die Kegel mannshoch, die Kugel durch einen Gymnastikball ersetzt und als besonderes Feature kann die Kugel durch eine überdimensionierte Schleuderkonstruktion gegen die Kegel geschlagen werden.
        </p>
        <a href="/kegeln" class="btn btn-play">Zum Livestream</a>
    </div>

</div>

<?php get_footer(); ?>