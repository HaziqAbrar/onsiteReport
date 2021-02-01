<?php
include 'component/header.php';
require 'data.php';

$reports = getReports();


?>


<div class="contain" >

    <div>
        <h3>Onsite Report</h3>
    </div>
    <div class="container" style="text-align:center;">
        <p>
            <a class="btn btn-info btn-lg" href="create.php">New Report</a>
        </p>

    </div>


    <div class="customerz">
        <table class="table" id="customers" >
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Site</th>
                    <th scope="col">Name</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reports as $report): ?>
                <?php if (!isset($report['status'])): ?>
                <tr>
                    <td><?php echo $report['Date'] ?></td>
                    <td><?php echo $report['place'] ?></td>
                    <td><?php echo $report['name'] ?></td>
                    <td><?php echo $report['purpose'] ?></td>
                    <td style="text-align:center;">
                        <a href="details.php?id=<?php echo $report['id'] ?>"
                            class="btn btn-sm btn-info px-3 m-1">Details</a>

                        <form style="display:inline-block" method="POST" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo $report['id'] ?>">
                            <button class="btn btn-sm btn-danger px-3 m-1">Delete</button>
                        </form>

                    </td>
                </tr>
                <?php endif ?>
                <?php endforeach;;?>

            </tbody>
        </table>

    </div>

</div>



<?php include 'component/footer.php'; ?>