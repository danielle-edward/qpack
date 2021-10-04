<?php
require_once 'vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;

if(isset($_FILES['file'])){
  $errors = array();
  $client = new StorageClient(['keyFilePath' => 'qpack-cisc325-1e3303bb51cb.json']);
  $bucket = $client->bucket('qpack-bucket');

  #$filePath = pathinfo($_FILES['file']['name']);
  #$prefix = uniqid('prefix_', true); //generate random string to avoid name conflicts
  #$filename = $prefix . "." . $filePath['extension'];

  $bucket->upload(
    fopen($_FILES['file']['tmp_name'], 'r'),
    ['name' => 'some-name.png']);
  }
?>
