<?php
if(isset($_SESSION['nom'])){
    if (isset($_COOKIE['ticket']) AND $_COOKIE['ticket'] == $_SESSION['ticket'])
    {
        // Controle Ok !
        $ticket = session_id().microtime().rand(1,999);
        $ticket = hash('sha512', $ticket);
        $_SESSION['ticket'] = $ticket;
        setcookie('ticket', $ticket, time() + (60 * 20)); // Expire au bout de 20 min
    }
    else
    {
        // On détruit la session
        session_destroy();
        unset($_COOKIE['ticket']);
        header('location:index.php');
    }
}