<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Blog Site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="bg-gray-50 h-screen p-16">
            <div class="flex flex-col bg-white shadow-lg rounded-2xl p-8 max-w-xl w-full">
                <div class="mb-5">
                    <form method="POST" action="">
                        <h1 class="font-medium text-md pb-3">Add a New Task</h1>
                        <input type="text" name="task" placeholder="Task" class="border-2 border-solid border-slate-800 rounded-xl mb-3 px-2 py-1 max-w-48 w-full" required>
                        <button type="Submit" class="py-1 px-4 bg-sky-500 text-white rounded-full">Add Task</button>
                    </form>
                </div>

                <div>
                    <h1 class="font-medium text-md pb-3">List of Tasks</h1>
                    <ul>
                        <?php foreach($list as $task) { ?>
                            <li> <?php echo $task; ?> </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>