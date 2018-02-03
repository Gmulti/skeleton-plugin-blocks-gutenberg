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

echo $colors->getColoredString("Replace files and strings", "green");
foreach ($directories as $key => $dir) {
    DirectoryHelper::replaceStringInFiles($dir, "PluginReplace", $pluginNoSpace);
    DirectoryHelper::replaceStringInFiles($dir, 'PLUGIN_REPLACE', $pluginConst);
    DirectoryHelper::replaceStringInFiles($dir, '{PLUGIN_SLUG}', $pluginSlug);
    DirectoryHelper::replaceStringInFiles($dir, '{PLUGIN_NAME}', $pluginName);
}

foreach ($files as $key => $file) {
    DirectoryHelper::replaceStringInFile($file, "PluginReplace", $pluginNoSpace);
    DirectoryHelper::replaceStringInFile($file, 'PLUGIN_REPLACE', $pluginConst);
    DirectoryHelper::replaceStringInFile($file, '{PLUGIN_SLUG}', $pluginSlug);
    DirectoryHelper::replaceStringInFile($file, '{PLUGIN_NAME}', $pluginName);
}

DirectoryHelper::renameFile("plugin.php", "plugin", $pluginSlug);
DirectoryHelper::renameFilesInDir("src", "PluginReplace", $pluginNoSpace);

echo $colors->getColoredString("Composer update", "green");
exec("composer update");
echo $colors->getColoredString("Yarn install", "green");
exec("yarn");

