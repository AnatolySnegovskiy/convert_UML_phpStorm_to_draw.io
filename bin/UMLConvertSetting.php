<?php


$rootUML = __DIR__ . '/../../../../UML';
$phpUMLCatalog = $rootUML . '/storm';
$drawioUMLCatalog = $rootUML . '/drawio';

if (!file_exists($rootUML)) {
    mkdir($rootUML);
    mkdir($phpUMLCatalog);
    mkdir($drawioUMLCatalog);
}