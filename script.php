<?php

require_once 'vendor/autoload.php';

use MeiliSearch\Client;

$client = new Client("http://localhost:7700", 'key');

$index = $client->getIndex('index_id');

$response = $client->index('index_id')->updateSynonyms([
    '0029' => ['029', '29'],
    '029' => ['0029', '29'],
    '29' => ['0029', '029']
]);

$synonyms = $client->index('index_id')->getSynonyms();

$search = $client->index('index_id')->search(29);
 
print_r($search);