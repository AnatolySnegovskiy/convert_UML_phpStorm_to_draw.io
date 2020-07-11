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
    throw new Exception('please put the UML files in the folder yourProject/UML/storm');
    exit;
}