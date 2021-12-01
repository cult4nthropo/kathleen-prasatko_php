<?php
$navigation = ["index.php" => "Home", 
"cv.php" => "Lebenslauf", 
"code.php" => "Projekte", 
"contact.php" => "Kontakt", 
"impressum.php" => "Impressum"];
foreach($navigation as $menupoint=> $title) {
    echo "<ul class='site-nav-list'>
    <li><a href='$menupoint'>$title</a></li>
    <ul>";
};
?>