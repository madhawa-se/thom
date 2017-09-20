<?php

$secondary_links = array(
    ["menu-8779"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-87459"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8549"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8769"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8579"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8f9"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8569"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8h9"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-87jj9"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8gf"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team"),
    ["menu-8yhr9"] => array(["attributes"] => "", ["href"] => "node/24334", ["title"] => "our team")
);



$vertions = [
    "mobile" => array("columns" => 2, "class" => "mobile ", "col_class" => "2"),
    "desktop" => array("coulmns" => 3, "class" => "desktop ", "col_class" => "6")
];
$amount = sizeof($secondary_links);
$keys = array_keys($secondary_links);

foreach ($vertions as $key => $platform) {
    print "<div class='menu-$key'" . $platform['class'] . ">";
    $counter = 0;
    $rows = ceil($amount / $platform['columns']);
    for ($x = 0; $x < $platform['columns']; $x++) {
        print "<div class='col-sm-2 menu-group'><ul>";
        for ($i = 0; $i < $rows; $i++) {
            $link = $secondary_links[$keys[$counter]];
            $href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
            $title = $link['title'];
            print "<li class='leaf'><a href='$href'>{$title}</a></li>";
            $counter++;
            if ($counter >= $amount) {
                break;
            }
        }
        print "</ul></div>";
    }
    print "</div>";
}
?>