<?php
$data = $tampil->fetch_assoc();
$a    = $username;
$d    = $data['id'];
if ($a == 'superadmin') {
    @$_SESSION['loginsuper'] = $d;
    header('Location: home.php');
    exit;
}elseif ($a == 'adminwebskp') {
    @$_SESSION['admin'] = $d;
    header('Location: home.php');
    exit;
}else {
    @$_SESSION['user'] = $d;
    header('Location: home.php');
    exit;
}

?>