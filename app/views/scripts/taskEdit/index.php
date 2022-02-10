<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>

<form action="/save" method="post">

    <fieldset><legend>Edit Task</legend>

        <div>
            <label hidden for="id">Name: <input type="text" name="id" id="id" value="<?php echo $task['id']; ?>"></label>
        </div>

        <div>
            <label for="name">Name: <input type="text" name="name" id="name" value="<?php echo $task['name']; ?>"></label>
        </div>

        <div>
            <label for="assignee">Assignee: <input type="text" name="assignee" id="assignee" value="<?php echo $task['assignee']; ?>"></label>
        </div>

        <div>
            <label for="startDate">Start Date: <input type="date" name="startDate" id="startDate" value="<?php echo $task['startDate']; ?>"></label>
        </div>

        <div>
            <label for="endDate">End Date: <input type="date" name="endDate" id="endDate" value="<?php echo $task['endDate']; ?>"></label>
        </div>

        <div>
            <label for="status">Status: <select name="status" id="status" value="<?php echo $task['status']; ?>">
                    <option value="" selected disabled hidden><?php echo $task['status']; ?></option>
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