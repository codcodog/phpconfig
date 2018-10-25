<?php

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules(array(
        '@PSR2' => true,
        'array_syntax' => array('syntax' => 'short'),
        'binary_operator_spaces' => array(
            'default' => 'single_space',
        ),
        'blank_line_before_return' => true,
    ))
    ->setFinder($finder)
;
