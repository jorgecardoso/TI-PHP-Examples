<?php


function generateLoremH1($wordCount = 2) {

    return '<h1>' . generateLorem($wordCount) . '</h1>';
}


function generateLorem($wordCount) {
    $loremWords = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie aliquam quam. Fusce venenatis ante id vestibulum feugiat. In vulputate malesuada mi in sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit, nunc vitae luctus fringilla, ante ipsum dignissim elit, in laoreet nisi orci id est. Vestibulum sed eleifend eros. In ultrices, justo quis ultrices sodales, felis lectus porta lectus, vitae blandit neque dui a eros. Proin ac orci pharetra, semper nibh nec, feugiat neque. Quisque a auctor nulla. Duis quis est faucibus, porta risus tincidunt, accumsan erat. Mauris sed diam venenatis, convallis arcu sed, elementum turpis.';

    $words = explode(' ', $loremWords);

    $generated = array_slice($words, 0, $wordCount);

    return implode(' ', $generated);
}