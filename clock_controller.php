<?php
/**
 * Created by PhpStorm.
 * User: philipr
 * Date: 2014/20/09
 * Time: 14:28
 */

date_default_timezone_set('America/New_York');

$IMAGE_ROOT_URL = 'http://thewc.co.s3.amazonaws.com/challenges/';
$IMG_MORNING = 'php-morning.png';
$IMG_AFTERNOON = 'php-afternoon.png';
$IMG_EVENING = 'php-evening.png';
$IMG_NIGHT = 'php-night.png';
$BG_MORNING = '#865f86';
$BG_AFTERNOON = '#2c87c8';
$BG_EVENING = '#c7b02f';
$BG_NIGHT = '#180629';

$MORNING_START = 5;
$MORNING_STOP = 10;
$AFTERNOON_START = 11;
$AFTERNOON_STOP = 15;
$EVENING_START = 16;
$EVENING_STOP = 19;
$NIGHT_START = 20;
$NIGHT_STOP = 4;

$display_time = date( 'H:i' );
$bg_color = $BG_MORNING;
$imgsrc = $IMAGE_ROOT_URL.$IMG_MORNING;

$time_hour = date( 'H' );
$hour = intval( $time_hour );

if ( ( $hour >= $MORNING_START ) && ( $hour <= $MORNING_STOP ) ) {
    $bg_color = $BG_MORNING;
    $imgsrc = $IMAGE_ROOT_URL.$IMG_MORNING;
} elseif ( ( $hour >= $AFTERNOON_START ) && ( $hour <= $AFTERNOON_STOP ) ) {
    $bg_color = $BG_AFTERNOON;
    $imgsrc = $IMAGE_ROOT_URL.$IMG_AFTERNOON;
} elseif ( ( $hour >= $EVENING_START ) && ( $hour <= $EVENING_STOP ) ) {
    $bg_color = $BG_EVENING;
    $imgsrc = $IMAGE_ROOT_URL.$IMG_EVENING;
} elseif ( ( $hour >= $NIGHT_START ) && ( $hour > $MORNING_START ) ) {
    $bg_color = $BG_NIGHT;
    $imgsrc = $IMAGE_ROOT_URL.$IMG_NIGHT;
}