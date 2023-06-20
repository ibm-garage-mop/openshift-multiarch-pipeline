<!DOCTYPE html>
<html>
<head>
  <title>Fading Background Color and CPU Architecture</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      transition: background-color 1s ease;
    }
    .cpu-logo {
      width: 150px;
      height: auto;
    }
  </style>
  <script>
    function changeBackgroundColor() {
      var colors = ["#FF0000", "#00FF00", "#0000FF", "#FFFF00", "#00FFFF", "#FF00FF"];
      var randomColor = colors[Math.floor(Math.random() * colors.length)];
      document.body.style.backgroundColor = randomColor;
    }
    setInterval(changeBackgroundColor, 2000); // Change color every 2 seconds
  </script>
</head>
<body>
  <?php
  $cpuArchitecture = php_uname('m');

  // Define mapping between CPU architecture and corresponding logo URLs
  $architectureLogos = [
    'x86_64' => 'https://images.computerhistory.org/revonline/images/102662150p-03-01.jpg?w=600',
    'arm64' => 'https://images.anandtech.com/doci/13959/1_678x452.jpg',
    'ppc64le' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/IBM_PowerPC601_PPC601FD-080-2_top.jpg',
    // Add more mappings for other CPU architectures if needed
  ];

  // Check if a corresponding logo URL exists for the detected CPU architecture
  $cpuLogo = isset($architectureLogos[$cpuArchitecture]) ? $architectureLogos[$cpuArchitecture] : '';

  ?>
  <h1>Welcome to the CPU Architecture App!</h1>
  <?php if (!empty($cpuLogo)) { ?>
    <img src="<?php echo $cpuLogo; ?>" alt="CPU Logo" class="cpu-logo">
  <?php } ?>
  <p>Server CPU Architecture: <?php echo $cpuArchitecture; ?></p>
</body>
</html>
