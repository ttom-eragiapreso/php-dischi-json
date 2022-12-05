<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous' />
  <link rel="stylesheet" href="styles.css">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.45/vue.global.min.js' integrity='sha512-Pdnl+dKWHA0jEnmhogUHlOw3FqDeujiEc3XQDkvMrPUAvytiU2cZiknw2xDPgDS+u2prg2n+6eKz3CPG588gTQ==' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js' integrity='sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==' crossorigin='anonymous'></script>
  <script src="main.js" defer></script>
  <title>Dischi</title>
</head>

<body>

  <div id="app">

    <div class="header">
      <div class="container">
        <i class="fa-brands fa-spotify"></i>
      </div>
    </div>

    <div class="em-container">
      <div class="container px-5">
        <div class="row row-cols-3">
          <div class="col" v-for="(disc, index) in discs" :key="index">
            <div class="card mb-2">
              <img :src="disc.poster" class="card-img-top" :alt="disc.title">
              <div class="card-body text-center">
                <h5 class="card-title">{{disc.title}}</h5>
                <span>{{disc.author}}</span>
                <h4>{{disc.year}}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>


</body>

</html>