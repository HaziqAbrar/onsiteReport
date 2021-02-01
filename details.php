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


?>

<div class="container mt-5">
    <h3>
        Details of Report
    </h3>
    <table class="table table-bordered table-dark">
        <tbody>
            <tr>
                <th>Date </th>
                <td><?php echo $report['Date'] ?></td>
            </tr>
            <tr>
                <th>Start time </th>
                <td><?php echo $report['starttime'] ?></td>
            </tr>
            <tr>
                <th>Time concluded</th>
                <td><?php echo $report['endtime'] ?></td>
            </tr>
            <tr>
                <th>Location </th>
                <td><?php echo $report['place'] ?></td>
            </tr>
            <tr>
                <th>Name </th>
                <td><?php echo $report['name'] ?></td>
            </tr>
            <tr>
                <th>Purpose</th>
                <td><?php echo $report['purpose'] ?></td>
            </tr>
            <tr>
                <th>Tools</th>
                <td><?php echo $report['tools'] ?></td>
            </tr>
        </tbody>
    </table>

    <div class="float-right">
        <a href="index.php" class="btn btn-lg btn-secondary ">Back to List</a>

        <a href="update.php?id=<?php echo $report['id'] ?>" class="btn btn-lg btn-info ">Update</a>

        <form style="display:inline-block" method="POST" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $report['id'] ?>">
            <button class="btn btn-lg btn-danger">Delete</button>
        </form>
    </div>

</div>


<?php include 'component/footer.php'; ?>