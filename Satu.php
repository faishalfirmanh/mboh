<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style media="screen">
      .div1{
        background-color: rgb(60,211,249);
        width: 300px;
      }
    </style>


    <h1 id="iniH1">ini adalah h1</h1>
    <div class="div1">
      <ul>
        <li>anjiing</li>
        <li>kuda</li>
        <li> jerapah</li>
      </ul>
      <p>itu adalah daftar nama hewan berkaki empat</p>
      <input type="text" value="ini isinya teks pek">
    </div>
    <div class="div2">
      <p>ini adalah daftar nama nama kendaraan yang ingin saya beli</p>
      <ol>
        <li>nisan tera</li>
        <li class="tiger">honda tiger</li>
        <li>civic</li>
        <li>kawasaki 250</li>
        <p>atau mobil bis didalam <b>P</b></p>
      </ol>
      <section id="idSection">
        ini adalah section browww semoga salah satu bisa terbeli di tahun ini amin 👼
        <h1>dongakno slur</h1>
      </section>
      <section class="klasSection">
        bismillh rejeb menjadi lebih baik
      </section>
    </div>

    <script type="text/javascript">
      const bangun = document.querySelector('.div1')
      // bangun.addEventListener('mouseenter', function(e) {
      //   e.target.style.backgroundColor ="rgb(228,59,59)";
      //   e.target.style.width ="400px"
      //   e.target.style.height ="100px"
      //   e.target.innerHTML ="MOUSE CLOSE"
      // });
      // bangun.addEventListener('mouseleave', function(e) {
      //   e.target.style.backgroundColor ="rgb(60,211,249)"
      //   e.target.style.width = "200px";
      //   e.target.style.height= "100px";
      //   e.target.removeHTML ="MOUSE CLOSE"
      // });


      // bangun.addEventListener('click', function(e) {
      //   e.target.innerHTML ="ini teks dari js"
      // });

      const tiger = document.querySelector('.div2')
      // tiger.addEventListener('click', function(e) {
      //   e.target.style.backgroundColor="rgb(222,7,224)"
      // });
      //
      // let fak = new Promise((resolve, riject)=>{
      //   const time = 3000
      // if (false) {
      //     resolve('sudahh diterima')
      // }
      //   else {
      //   riject('pesan ditolak')
      //   }
      // })
      // .then((msg)=>console.log(msg))
      // .catch((msg)=>console.log('ini catch gagal '+msg))

      function sapa(nama){
        alert(`Halo, ${nama}`)
      }
      function tampilPesan(cb){
        const nam = prompt('Masukkan nama : ')
        cb(nam)
      }
      // tampilPesan(sapa) //1
      tampilPesan((nam)=>{
        alert(`apa kabar , ${nam}`)
      })  //dapat menggunakan anonymousFunction
    </script>
  </body>
</html>
