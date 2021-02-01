<div class="wrapper">
    <?php if ($report['id']):?>
    <div class="title">
        Update User Data
    </div>
    <?php else: ?>
    <div class="title">
        New Report
    </div>
    <?php endif ?>

    <div class="form">
        <form method="POST" enctype="multipart/form-data" action="">



            <div class="inputfield">
                <label>Name</label>
                <input name="name" class="input" value="<?php echo $report['name'] ?>" required >
            </div>
            <div class="inputfield">
                <label>Date</label>
                <input class="input" type="date" name="Date" placeholder="dd-mm-yyyy"
                    value="<?php echo $report['Date'] ?>" min="1997-01-01" max="2030-12-31" required>
            </div>
            <div class="inputfield">
                <label>Start Time</label>
                <input type="time" class="input" name="starttime" value="<?php echo $report['starttime'] ?>" min="09:00"
                    max="18:00" required>
            </div>
            <div class="inputfield">
                <label>Time Concluded</label>
                <input type="time" class="input" name="endtime" value="<?php echo $report['endtime'] ?>" min="09:00"
                    max="18:00" required>
            </div>
            <div class="inputfield">
                <label>Task Description</label>
                <textarea name="purpose" class="textarea" value="<?php echo $report['purpose'] ?>" required
                    ><?php echo $report['purpose'] ?></textarea>
            </div>
            <div class="inputfield">
                <label>Location</label>
                <input name="place" class="input" value="<?php echo $report['place'] ?>" required>
            </div>
            <div class="inputfield">
                <label>Tools</label>
                <input name="tools" class="input" value="<?php echo $report['tools'] ?>" required>
            </div>


            <div class="container mt-3 inputfield">
                <?php if ($report['id']):?>
                <button style="float:right" class="btn">Update Data</button>
                <?php else: ?>
                <button style="float:right" class="btn">Submit</button>
                <?php endif ?>
            </div>



        </form>
    </div>

</div>


