<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Edit <?php echo $taskId; ?></title>
</head>
<body>

<form action="/app/controllers/taskEditController.php" method="post">

    <fieldset><legend>Edit Task</legend>

        <div>
            <label for="name">Name: <input type="text" name="name" id="name">value="<?php echo $task['name'] ?>"</label>
        </div>

        <div>
            <label for="assignee">Assignee: <input type="text" name="assignee" id="assignee" placeholder="Jane Doe"></label>
        </div>

        <div>
            <label for="startDate">Start Date: <input type="date" name="startDate" id="startDate"></label>
        </div>

        <div>
            <label for="endDate">End Date: <input type="date" name="endDate" id="endDate"></label>
        </div>

        <div>
            <label for="status">Status: <select name="status" id="status">
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select></label>
        </div>

    </fieldset>

    <input type="submit">

</form>

</body>
</html>