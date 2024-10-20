<?php
if (isset($_POST['submit']) && $_POST['submit'] == 'izmeni') {
    $prijava = new Prijava($_POST['id_predmeta'], $_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum']);
    $status = Prijava::update($prijava, $conn);
    if ($status) {
        echo "Uspesno ste izmenili prijavu";
    } else {
        echo "Doslo je do problema prilikom izmene prijave";
    }
}
?>