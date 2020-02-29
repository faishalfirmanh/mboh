<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      const bil1 = [2,1,3,4,5,10,15,20,30,25]

      const filtr = bil1.filter(function(angk){
        return angk >=10
      })
      //console.log(bil1.sort());
    //  console.log('ini difilter',filtr)
      const dikelompok = filtr.map((bilFil)=>{
        return bilFil *2
      })
    //  console.log(`dikali 2`, dikelompok);
      const bilreduc = dikelompok.reduce((bil1, hasil)=> //reduce tanpa{}
        bil1+hasil, 0 //defaultnya adalah 0
      )
    //  console.log(`bilangan reduce`,bilreduc);

//chaingn
    const bilChainig = bil1.filter(bil => bil>=10)
    .map((bil1)=>{ return bil1 *2})
    .reduce((bilawal,hasil)=> bilawal+hasil)
    //console.log(bilChainig);

    const pegawai = 21

    // console.warn("Mulai");
    // pegawai.forEach((item) => { //termasuk higer order function
    //
    //   for (let i = 0; i < 1000000; i++) {
    //     let date = new Date()
    //   }
    //   //console.log(item.nama);
    // });
    // console.warn("Selesai");

    function getDataPeg(url, succes, error){
      let xhr = new XMLHttpRequest()
      xhr.onreadystatechange = function(){ //jika ready stagenya sudah siap
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            succes(xhr.response)
          }
          else if (xhr.status === 404) {
              error()
          }
        }
      }
      xhr.open('get',url)
      xhr.send()
    }
    // function succes(){
    //
    // }
    // function error(){
    //
    // }
    // getDataPeg('peg.json', succes, error)

    console.log("mulai");
    getDataPeg('peg.json',(data)=>{ //1. function pertama saat sukses
      // console.log(JSON.parse(resul));
      const dataPeg = JSON.parse(data) //parsing data menjadi obj
      dataPeg.forEach((sum) => {
          console.log(sum.nama);
      });
    },(err)=>{  //2. function kedua saat error
      console.log(`error broww`,err);
    })
    console.log("selesai broww ");



    </script>

  </body>
</html>
