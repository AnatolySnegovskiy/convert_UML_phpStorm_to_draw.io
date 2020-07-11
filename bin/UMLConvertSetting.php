<?php


$rootUML = __DIR__ . '/../../../../UML';
$phpUMLCatalog = $rootUML . '/storm';
$drawioUMLCatalog = $rootUML . '/drawio';

if (!file_exists($rootUML)) {
    mkdir($rootUML);
    mkdir($phpUMLCatalog);
    mkdir($drawioUMLCatalog);
}

if (!file_exists($rootUML . '*.uml')) {
    echo "\033[31m please put the UML files in the folder yourProject/UML/storm \n";
    exit;
}