<?php
include './lib/request/select_role.php';
foreach ($ar_role as $key => $tb_role){
    echo '<option value="'.$tb_role['IdRole'].'">'.$tb_role['DesignRole'].'</option>';
}

