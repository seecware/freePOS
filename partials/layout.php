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
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          text: {
            50: '#120908',
            100: '#24120f',
            200: '#48241e',
            300: '#6c352d',
            400: '#90473c',
            500: '#b4594b',
            600: '#c37a6f',
            700: '#d29b93',
            800: '#e1bdb7',
            900: '#f0dedb',
            950: '#f7eeed',
          },
          background: {
            50: '#130806',
            100: '#26110d',
            200: '#4d2219',
            300: '#733326',
            400: '#994433',
            500: '#bf5540',
            600: '#cc7766',
            700: '#d9998c',
            800: '#e6bbb3',
            900: '#f2ddd9',
            950: '#f9eeec',
          },
          primary: {
            50: '#04001a',
            100: '#080033',
            200: '#110066',
            300: '#190099',
            400: '#2200cc',
            500: '#2a00ff',
            600: '#5533ff',
            700: '#7f66ff',
            800: '#aa99ff',
            900: '#d5ccff',
            950: '#eae5ff',
          },
          secondary: {
            50: '#05001a',
            100: '#090033',
            200: '#130066',
            300: '#1c0099',
            400: '#2500cc',
            500: '#2f00ff',
            600: '#5833ff',
            700: '#8266ff',
            800: '#ac99ff',
            900: '#d5ccff',
            950: '#eae5ff',
          },
          accent: {
            50: '#031705',
            100: '#062d0a',
            200: '#0c5a14',
            300: '#12871d',
            400: '#17b527',
            500: '#1de231',
            600: '#4ae85a',
            700: '#78ed83',
            800: '#a5f3ad',
            900: '#d2f9d6',
            950: '#e8fcea',
          },
        }
      }
    }
  }
</script>
</body>
</html>
