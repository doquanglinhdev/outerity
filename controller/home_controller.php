<?php

function show_home()
{
    render("home");
}
function show_homeadmin()
{
    if (isset($_SESSION['useradmin'])) {
        renderadmin("dashboard");
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}
