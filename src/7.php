<?php
$teachers = array("John Doe", "Jane Smith", "Bob Johnson");
$classes = array(array("Math", "English"), array("Science", "History"), array("Music", "Art"));
for ($i=0; $i < 10; $i++) {
    echo '<tr>';
    for ($j=0; $j < 2; $j++) { 
        echo '<td>'.($teachers[array_rand($teachers)]).'</td>';
    }
    for ($k=0; $k < 2; $k++) { 
        echo '<td>'.$classes[array_rand($classes)][$k].'</td>';
    }
    echo '</tr>';
}
?>