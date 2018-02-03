#!/usr/bin/env php
<?php
date_default_timezone_set("Europe/Paris");

require_once __DIR__ . "/_utils.php";

$colors = new Colors();

$directories = array(
    "src"
);

$files = array(
    "plugin.php",
    "composer.json",
    "readme.txt"
);

$options = getopt("n:");
if(empty($options) && !array_key_exists("n", $options)) {
    echo $colors->getColoredString("Miss name plugin", "white", "red");
    echo $colors->getColoredString("Use : -n ", "red");
    exit;
}

$pluginName     = trim($options["n"]);
$pluginSlug     = strtolower(str_replace(" ", "-", $pluginName));
$pluginConst    = strtoupper(str_replace(" ", "_", $pluginName));
$pluginNoSpace  = str_replace(" ", "", $pluginName);


// foreach ($directories as $key => $dir) {
//     DirectoryHelper::replaceStringInFiles($dir, "PluginReplace", $pluginNoSpace);
//     DirectoryHelper::replaceStringInFiles($dir, 'PLUGIN_REPLACE', $pluginConst);
// }

// foreach ($files as $key => $file) {
//     DirectoryHelper::replaceStringInFile($file, "PluginReplace", $pluginNoSpace);
//     DirectoryHelper::replaceStringInFile($file, 'PLUGIN_REPLACE', $pluginConst);
// }

DirectoryHelper::renameFile("plugin.php", "plugin", $pluginSlug);
DirectoryHelper::renameFilesInDir("src", "PluginReplace", $pluginNoSpace);

