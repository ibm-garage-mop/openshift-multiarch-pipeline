<!DOCTYPE html>
<html>
<head>
  <title>Fading Background Color and CPU Architecture</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Playfair+Display:ital@1&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: "Roboto", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('https://i.ibb.co/6Dt6Ggd/gif.gif');
      background-size: cover;
    }
    .cpu-title {
      color: #1e3a8a;
    }
    .cpu-logo {
      width: 150px;
      height: auto;
    }
    .title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
      margin-top: 0;
    }
    .box {
      padding: 1rem;
      border-radius: 0.35rem;
      display: flex;
      flex-direction: column;
    }
    .row {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .badge {
      background-color: #f0f0f0;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
      margin-left: 0.5rem;
    }
    .undertitle {
      margin-top: 1rem;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
    }
    .container {
      background-image: url('https://i.ibb.co/cbt85fT/cpu.jpg');
      background-size: cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 400px;
      width: 400px;
      border-radius: 1rem;
      animation-name: fadeInScale;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
    }
    .undertitle {
      font-family: "Lato", sans-serif;
      font-weight: 400;
      font-style: italic;
      color: #f0f0f0;
      text-align: center;
      width: 300px;
    }
    .logo-container {
      background: white;
      width: 100vw;
    }
    .sars {
      position: fixed;
      bottom:10px;
      left: 10px;
      border-radius: 0.35rem;
      width: 100px;
      height: 50px;
    }
    .openshift {
      position: fixed;
      bottom: 10px;
      left: 120px;
      width: 50px;
      height: 50px;
    }

    @keyframes fadeInScale {
      0% {
        transform: scale(0.8);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <?php
  $cpuArchitecture = php_uname('m');

  // // Define mapping between CPU architecture and corresponding logo URLs
  // $architectureLogos = [
  //   'x86_64' => 'https://images.computerhistory.org/revonline/images/102662150p-03-01.jpg?w=600',
  //   'arm64' => './assets/arm.png',
  //   'aarch64' => 'https://www.apple.com/newsroom/images/live-action/wwdc-2022/Apple-WWDC22-M2-chip-hero-220606_big.jpg.large_2x.jpg',
  //   'ppc64le' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/IBM_PowerPC601_PPC601FD-080-2_top.jpg',
  //   // Add more mappings for other CPU architectures if needed
  // ];

  // // Check if a corresponding logo URL exists for the detected CPU architecture
  // $cpuLogo = isset($architectureLogos[$cpuArchitecture]) ? $architectureLogos[$cpuArchitecture] : '';

  ?>
  <div>
    <div class="container">
      <div class="box">
        <div class="row">
            <?php if ($cpuArchitecture == 'x86_64') { ?>
              <h2 class="cpu-title">x86</h2>
            <?php } else if ($cpuArchitecture == 'arm64') { ?>
              <h2 class="cpu-title">ARM</h2>
            <?php } else if ($cpuArchitecture == 'ppc64le') { ?>
              <h2 class="cpu-title">IBM </br>Power</h2>
            <?php } else { ?>
              <h2 class="cpu-title">NONE</h2>
            <?php } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="undertitle">
          Single window platform brought to you on Openshift running on: <?php echo $cpuArchitecture; ?>
        </div>
    </div>
  </div>
  <div class="sars-container">
  <img class="sars" src="https://i.ibb.co/D4hsxvg/SARS-scaled.png" alt="">
  <img class="openshift" src="https://i.ibb.co/w7bzPck/redhat.png" alt="">
  </div>
</body>
</html>
