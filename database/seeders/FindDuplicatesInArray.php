<?php

function findDuplicatesInArray($array,$key = 'id'): array
{
    // Extract the key values from the array
    $key_values = array_column($array, $key);

    // Count all 'id' values in the array
    $counts = array_count_values($key_values);

    // Filter the counts to get only those 'id' values that occur more than once
    $duplicates = array_filter($counts, function($count) {
        return $count > 1;
    });

    // Return only the keys (duplicated 'id' values)
    return array_keys($duplicates);
}
