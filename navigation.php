<?php
$navigation = ["index.php" => "Home", 
"cv.php" => "Lebenslauf", 
"code.php" => "Projekte", 
"contact.php" => "Kontakt", 
"impressum.php" => "Impressum"];

echo "<ul class='site-nav-list'>";
foreach($navigation as $menupoint=> $title) {
    echo "<li><a href='$menupoint' class=$title>$title</a></li>";
};
echo "</ul>";

?>