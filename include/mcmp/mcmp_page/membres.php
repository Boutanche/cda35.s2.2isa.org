<main>
    <?php if(isset($_GET['id']) && !empty($_GET['id'])){
        include './include/mcmp/tmpl/team.php';
    }
    else{
        include './include/mcmp/tmpl/team_all.php';
    }
    ?>
</main>