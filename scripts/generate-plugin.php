#!/usr/bin/env php
<?php
date_default_timezone_set("Europe/Paris");

require_once __DIR__ . "/_utils.php";

$colors = new Colors();

$directories = array(
    "src"
);

$filesCp = array(
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

$namePlugin = trim($options["n"]);

// echo $colors->getColoredString("Remove node_modules", "green");
// exec("rm -rf node_modules", $mainDirectory);
// echo $colors->getColoredString("Composer update - version PHP : " . phpversion(), "green");
// exec("composer update");
// echo $colors->getColoredString("Yarn install", "green");
// exec("yarn");
// echo $colors->getColoredString("Brunch build --production", "green");
// exec("NODE_ENV=production brunch build --production");

// echo $colors->getColoredString("Remove dir useless", "green");
// if(file_exists($dirDeploy)){
//     exec("rm -rf $dirDeploy");
// }

// if(file_exists($zipName)){
//     exec("rm -rf $dirDeploy");
// }

// echo $colors->getColoredString("Prepare directory", "green");
// exec("mkdir $dirDeploy");

// echo $colors->getColoredString("Copy directory", "green");
// foreach ($directoriesCp as $key => $dir) {
//     exec("cp -R ./$dir $dirDeploy/");
// }

// echo $colors->getColoredString("Files copy", "green");
// foreach ($filesCp as $key => $file) {
//     exec("cp ./$file $dirDeploy/");
// }


// foreach (glob("**/.DS_Store") as $filename) {
//     exec("rm -rf $filename");
// }

// foreach (glob(".DS_Store") as $filename) {
//     exec("rm -rf $filename");
// }


// exec("rm -rf $dirDeploy/public/css/*.map");
// exec("rm -rf $dirDeploy/public/js/*.map");

// echo $colors->getColoredString("Change version by : " . $options["v"], "green");
// DirectoryHelper::replaceStringInFile("$dirDeploy/$mainFile", "{VERSION}", $options["v"]);
// DirectoryHelper::replaceStringInFile("$dirDeploy/$mainFile", 'define("DELIPRESS_LOGS", true);', 'define("DELIPRESS_LOGS", false);');

// $zip      = new ExtendZipArchive();
// $res      = $zip->open($zipName, \ZipArchive::CREATE);

// if($res === TRUE){
//     $zip->addDir($dirDeploy, ".");
//     $zip->close();    
// }

// exec("rm -rf ./$dirDeploy");
