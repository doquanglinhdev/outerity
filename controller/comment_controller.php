<?php
function commentt()
{
    if (isset($_SESSION['useradmin'])) {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $allcmt = lis_commentt($id);
            // $countcmt = count_comment();
            renderadmin(
                "detail_comment",
                [
                    'allcmt' => $allcmt
                    // 'countcmt' => $countcmt
                ]
            );
        } else {
            $allcmt = lis_comment();
            $countcmt = count_comment();
            renderadmin(
                "list_comment",
                [
                    'allcmt' => $allcmt,
                    'countcmt' => $countcmt
                ]
            );
        }
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}
