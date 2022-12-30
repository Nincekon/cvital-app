<?php session_start(); ?>

<?php include_once "data/model.php"; ?>
<?php include_once "controllers.php"; ?>

<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($uri, "seekAdmin") !== false) {
    include_once "_partials/header_admin.php";
    include_once "_partials/sidebar_admin.php";
} elseif (strpos($uri, "marche") !== false) {

    include_once "_partials/header.php";

    #include_once "frontend/shop.php";

} elseif (strpos($uri, "account") !== false) {
    # include_once "_partials/header.php";
} else {
    # $header_articles = get_articles();
}

?>

<?php include_once "config/routes.php"; ?>

<?php 
if (strpos($uri, "seekAdmin") !== false) {
    include_once "_partials/footer_admin.php";
} else {
    include_once "_partials/footer_admin.php"; 
}
?>