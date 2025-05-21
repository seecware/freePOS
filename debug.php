<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Debug: ON</title>
</head>
<body>
<div class="mx-auto mt-20 flex max-w-lg items-center gap-x-4 rounded-xl bg-white p-6 shadow-lg outline outline-black/5 dark:bg-slate-800 dark:shadow-none dark:-outline-offset-1 dark:outline-white/10">
  <img class="size-12 shrink-0" src="/assets/debug.png" alt="ChitChat Logo" />
  <div>
    <div class="text-xl font-medium text-black dark:text-white">Debug info:</div>
    <p class="text-gray-500 dark:text-gray-400 bg-green-300 rounded pr-2 pl-2">Current route: <?php print_r($route); ?></p>
    <p class="text-gray-500 dark:text-gray-400 bg-yellow-300 rounded pr-2 pl-2">Server software: <?php echo $_SERVER["SERVER_SOFTWARE"]; ?></p>
    <p class="text-gray-500 dark:text-gray-400 bg-red-300 rounded pr-2 pl-2">Remote adress: <?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
    <p class="text-gray-500 dark:text-gray-400 bg-blue-300 rounded pr-2 pl-2">Current dir: <?php echo __DIR__;  ?></p>
    <p class="text-gray-500 dark:text-gray-400 bg-cyan-300 rounded pr-2 pl-2">Script file launched: <?php echo $_SERVER["SCRIPT_FILENAME"]; ?></p>
    <p class="text-gray-500 dark:text-gray-400 bg-purple-300 rounded pr-2 pl-2">Triggered Controller: <?php echo $ControllerClass ?? "None controller selected!"; ?></p>
  </div>
</div>
</body>
</html>
