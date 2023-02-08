<?php

require_once './vendor/autoload.php';

require_once 'src/Connector.php';
require_once 'src/Activity.php';
require_once 'src/Result.php';
require_once 'src/ListResult.php';

$connector = new src\Connector('https://reqres.in/api/');
$activity = new src\Activity($connector);

// Get data from the endpoint
$result = new src\Result($activity->get('users', ['page' => 2]));
// Check the status code of the response
if ($result->getStatusCode() === 200) {
    // Do something with the data
    $data = $result->getData();
    print_r($data);
}

// Post data to the endpoint
$data = [
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
];
$result = new src\Result($activity->post('users', $data));
// Check the status code of the response
if ($result->getStatusCode() === 201) {
    // Do something with the data
    $data = $result->getData();
    print_r($data);
}

// Put data to the endpoint
$data = [
    'name' => 'Jane Doe',
    'email' => 'jane.doe@example.com',
];
$result = new src\Result($activity->put('users/2', $data));
// Check the status code of the response
if ($result->getStatusCode() === 200) {
    // Do something with the data
    $data = $result->getData();
    print_r($data);
}

// Delete data from the endpoint
$result = new src\Result($activity->delete('users/2'));
// Check the status code of the response
if ($result->getStatusCode() === 204) {
    // Do something with the data
    $data = $result->getData();
    print_r($data);
}
