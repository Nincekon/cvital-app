<?php session_start(); ?>

<?php include_once "data/model.php"; ?>
<?php include_once "controllers.php"; ?>

<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($uri, "seekAdmin") !== false) {
    include_once "_partials/header_admin.php";
} elseif (strpos($uri, "marche") !== false) {
    # $header_categories = get_categories();
    include_once "_partials/header.php";

    // URI for /marche
    if ('/index.php/marche/catalogue' == $uri)
    {
        dd(4 + 4);
        echo catalogue();
    }
    elseif ('/index.php/marche/products' == $uri && isset($_GET['id']))
    {
        echo products($_GET['id']);
    }
    elseif ('/index.php/marche/product' == $uri && isset($_GET['id']))
    {
        echo product($_GET['id']);
    }
    elseif ('/index.php/marche/panier' == $uri)
    {
        echo panier();
    }
    elseif ('/index.php/marche/pay' == $uri)
    {
        echo pay();
    }
    elseif ('/index.php/marche/thanks' == $uri)
    {
        echo thanks();
    }
    elseif ('/index.php/marche/panier/add' == $uri && isset($_GET['id']))
    {
        echo add_panier($_GET['id']);
    }
    elseif ('/index.php/marche/panier/del' == $uri && isset($_GET['id']))
    {
        echo del_panier($_GET['id']);
    }

    #include_once "frontend/shop.php";
} elseif (strpos($uri, "account") !== false) {
    # include_once "_partials/header.php";
} else {
    # $header_articles = get_articles();
}

?>

<?php



// URI /seekAdmin

if ('/index.php/seekAdmin/index' == $uri)
{
    echo admin_index();
}
elseif ('/index.php/seekAdmin/admins' == $uri)
{
    echo admin_admins();
}
elseif ('/index.php/seekAdmin/categories' == $uri)
{
    echo admin_categories();
}
elseif ('/index.php/seekAdmin/category/add' == $uri)
{
    echo admin_category_add();
}
elseif ('/index.php/seekAdmin/products' == $uri)
{
    echo admin_products();
}
elseif ('/index.php/seekAdmin/products/add' == $uri)
{
    echo admin_product_add();
}
elseif ('/index.php/seekAdmin/category/del' == $uri)
{
    echo admin_category_del($_GET['id']);
}
elseif ('/index.php/seekAdmin/categories/import' == $uri)
{
    echo admin_categories_import();
} elseif ('/index.php/seekAdmin/product/del' == $uri) {
    echo admin_remove_product($_GET['id']);
} elseif ('/index.php/seekAdmin/admin/del' == $uri) {
    echo admin_remove_user($_GET['id']);
} elseif ('/index.php/seekAdmin/user/del' == $uri) {
    echo admin_remove_user($_GET['id']);
} elseif ('/index.php/seekAdmin/user/add' == $uri) {
    echo admin_user_add();
}
elseif ('/index.php/seekAdmin/user/import' == $uri)
{
    echo admin_user_import();
} elseif ('/index.php/seekAdmin/users' == $uri) {
    echo admin_users();
} elseif ('/index.php' == $uri) {
    echo index();
}

// URI for /account

elseif ('/index.php/account/login' == $uri)
{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo try_login();
    } else {
        echo login();
    }
}
elseif ('/index.php/account/logout' == $uri)
{
    $_SESSION["logged"] = false;
    $_SESSION["id"] = null;
    $_SESSION["email"] = null;  
    header('Location: /index.php');
    exit();   
}
elseif ('/index.php/account/register' == $uri)
{
    echo register();
}

// Default URI

else
{
    echo index();
}
?>

<?php include_once "_partials/footer.php"; ?>