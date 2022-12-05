<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.45/vue.global.min.js' integrity='sha512-Pdnl+dKWHA0jEnmhogUHlOw3FqDeujiEc3XQDkvMrPUAvytiU2cZiknw2xDPgDS+u2prg2n+6eKz3CPG588gTQ==' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js' integrity='sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==' crossorigin='anonymous'></script>
  <script src="main.js" defer></script>
  <title>Dischi</title>
</head>

<body>

  <div id="app">

    <ul>
      <li v-for="(disc, index) in discs" :key="index">
        {{disc.title}}
      </li>
    </ul>
  </div>


</body>

</html>