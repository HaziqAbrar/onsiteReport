<?php
include 'component/header.php';
require __DIR__.'/data.php';

if (!isset($_GET['id'])) {
    include 'component/error.php';
    exit;
}

$reportId = $_GET['id'];

$report =  getReportbyId($reportId);

if (!$report) {
    include 'component/error.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
    updateReport($_POST, $reportId);

    header ("Location: index.php");
}

?>


<?php include '_form.php'; ?>



<?php include 'component/footer.php'; ?>