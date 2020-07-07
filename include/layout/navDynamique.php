<nav>
    <ul id="navigation">
        <?php

        foreach ($ar_page_var as $key => $tb_page){

            if ($tb_page['key_file'] == $page){
                $active = 'active';
            }
            else {$active = '';}

            if($tb_page['navBarMenu'] == 1){
                echo '<li><a  class="'.$active.'" href="./index.php?page='.$tb_page['key_file'].'">'.$tb_page['menu'].'</a>';
                if($tb_page['key_file'] != 'blog'){
                    echo '</li>';
                }else{ ?>
                    <ul class="submenu">
                        <li><a href="./index.php?page=blog"><?php echo $ar_page_var['blog']['menu']; ?></a></li>
                        <li><a href="./index.php?page=notpass"><?php echo $ar_page_var['notpass']['menu']; ?></a></li>
                        <li><a href="./index.php?page=undermaintenance"><?php echo $ar_page_var['undermaintenance']['menu']; ?></a></li>
                    </ul>
                <?php
                }
            }
        }
        ?>
        <li class="header-right-btn f-right d-none d-lg-block ml-30">
            <a href="./index.php?page=authentifier" class="btn header-btn"><?php echo $ar_page_var['authentifier']['menu']; ?></a>
        </li>
    </ul>
</nav>
