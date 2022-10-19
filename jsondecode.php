<!DOCTYPE html>
<?php

$jfile = '{"Peter":35,"Ben":37,"Joe":43}';


$data = json_decode($jfile);

echo $data->Peter."<br>";
echo $data->Ben."<br>";


$details = array ("name32"=> "sdfafknaufndbfmdlcfas","id2"=>"tskyy","mail534"=>"324");

$read =  json_encode($details);

print_r($read);

?>