<?php

dataset('dataset A', [
    [1, 1, 1], // works in Pest 2 and Pest 3
    ['parameterA' => 1, 'parameterB' => 1, 'parameterC' => 1] // works in Pest 2 and fails in Pest 3
]);

test('dataset with same parameters count', function ($parameterA, $parameterB, $parameterC) {
    expect($parameterA)->toBe($parameterB);
    expect($parameterA)->toBe($parameterC);
})->with('dataset A');

test('dataset with less parameters count', function ($parameterA, $parameterB) {
    expect($parameterA)->toBe($parameterB);
})->with('dataset A');
