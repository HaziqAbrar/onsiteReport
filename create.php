<?php
include 'component/header.php';
require __DIR__.'/data.php';

$reports = 

$report = [
    "id"=> '',
    'name'=> '',
    'purpose'=> '',
    'tools'=> '',
    'place'=> '',
    'Date'=> '',
    'starttime'=>'',
    'endtime'=>''
];

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $report = createReport($_POST);

    header ("Location: index.php");
}


?>

<?php include '_form.php'; ?>



<?php include 'component/footer.php'; ?>