<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include __DIR__ . '/header.php'; ?>
    <div class="h-screen">
        <?php include __DIR__ . "/../views/{$name}.php"; ?>
    </div>
    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>