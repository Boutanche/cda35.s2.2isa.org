
<main>
    <?php if(isset($_GET['id']) && !empty($_GET['id'])){
        include './include/mcmp/tmpl/tmpl_news.php';
    }
    else{
        include './include/mcmp/tmpl/blogzone.php';
    }
    ?>
</main>
