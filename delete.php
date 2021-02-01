<?php
include 'component/header.php';
require __DIR__.'/data.php';

if (!isset($_POST['id'])) {
    include 'component/error.php';
    exit;
}

$reportId = $_POST['id'];

$report =  getReportbyId($reportId);

if (!$report) {
    echo "xjumpa report";
    // include 'component/error.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $report = deleteReport($_POST, $reportId);

    $status = "deleted";
    $report['status'] = $status;
    deleteReport($report,$reportId);

    header ("Location: index.php");
}

?>