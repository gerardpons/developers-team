<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200 max-w-screen-sm m-auto">

<div class="bg-white p-8 m-4 mt-16 rounded-md shadow-md flex flex-col align-center">

    <div>
        <h1 class="text-3xl font-bold">Edit task</h1>
    </div>

    <div class="mt-8 flex flex-col">
        <form action="/save" method="post">

            <input type="hidden" name="id" id="id" value="<?php echo $task['id']; ?>">

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Task name</label>
                <div class="mt-1">
                    <input class="p-2 shadow-sm border-gray-300 rounded-md border w-full" type="text" name="name" id="name" value="<?php echo $task['name']; ?>">
                </div>
            </div>

            <div class="mb-4">
                <label for="assignee" class="block text-sm font-medium text-gray-700">Assignee</label>
                <div class="mt-1">
                    <input class="p-2 shadow-sm border-gray-300 rounded-md border w-full" type="text" name="assignee" id="assignee" value="<?php echo $task['assignee']; ?>">
                </div>
            </div>

            <div class="mb-4">
                <label for="startDate" class="block text-sm font-medium text-gray-700">Start Date</label>
                <div class="mt-1">
                    <input class="p-2 shadow-sm border-gray-300 rounded-md border w-full" type="date" name="startDate" id="startDate" value="<?php echo $task['startDate']; ?>">
                </div>
            </div>

            <div class="mb-4">
                <label for="endDate" class="block text-sm font-medium text-gray-700">End Date</label>
                <div class="mt-1">
                    <input class="p-2 shadow-sm border-gray-300 rounded-md border w-full" type="date" name="endDate" id="endDate" value="<?php echo $task['endDate']; ?>">
                </div>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <div class="mt-1">
                    <select class="p-2 shadow-sm border-gray-300 rounded-md border w-full" name="status" id="status">
                        <option value="Pending">Pending</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
            </div>

            <input class="mt-8 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit" value="Save">

        </form>
    </div>

</div>

</body>
</html>