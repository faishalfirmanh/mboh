<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<script type="text/javascript">
  //dom
  // const title = document.querySelector('#judul')
  // title.innerHTML ="avanger"
  // var par1 = document.getElementsByTagName('p')[0]
  // par1.backgroundColor ="blue"
  // par1.setAttribute('name','p1');
  //
  // const link = document.querySelector('section#a a')
  // link.style.color ="red"
  // // link.removeAttribute('href');
  // const secb = document.querySelector('.p1')
  // secb.classList.add('klasX')
  // secb.classList.add('klasIpa1')
  // secb.classList.toggle('klasIpa1')
  // secb.classList.remove('p1','klasX')
  //secb.classList.replace('klasIpa1','klasSain')
  // const pBaru = document.createElement('p')
  //     pBaru.style.backgroundColor ="blue"
  //   const textP = document.createTextNode('ini pesan dari js')
  //   pBaru.appendChild(textP)
  //   const secA = document.getElementById('a')
  //   secA.appendChild(textP)
  //
  //   const lisBr = document.createElement('li')
  //   const texList = document.createTextNode('ini list baru dari js')
  //   lisBr.style.backgroundColor="rgb(242,241,65)"
  //
  //   lisBr.appendChild(texList) //menampung
  //   const ul = document.querySelector('section#b ul')
  //   const li2 = document.querySelector('ul li:nth-child(2)')
  //
  //   ul.insertBefore(lisBr, li2)
  //
  //   const link = document.getElementsByTagName('a')[0] //harus didefinisikan
  //   secA.removeChild(link)
  //
  //   const secB = document.getElementById('b')
  //   const p4 = secB.querySelector('p');
  //
  //   const h2Br = document.createElement('h2') //yang akan diganti
  //
  //   const textH2 = document.createTextNode('ini text h2 node') //textBrru
  //
  //   h2Br.appendChild(textH2)
  //
  //   secB.replaceChild(h2Br, p4) //proses mengganti
  //
  //   h2Br.style.backgroundColor ="red"



  //clousres
  function Init(){
    // let nama = "faisal"
    let hobi ="sepak bola"
    function TampilkaNama(namaB){

      console.log(namaB);
      console.log(hobi);
    }
    return TampilkaNama //fantionnya baru jalan sebagian
    //cara agar semua berjalan disimpan ke fariabel
  }
let varPngglNama = Init()
// varPngglNama("dimas")

//destructing
const motor = ["Honda","CBR200",25000000,"sport","PUTRA ANEKA","MOJOKERTO"]
// const [merk, nama, harga, jenis] = motor 1
//skip item
const[satu,,harga] = motor
//console.log(harga);

//menukar isi variabel atau swap
let a = 1;
let b = 20;
let c = 72
// console.log(a);
// console.log(b);
[a,b] = [b,a]
// console.log("ini setelah ditukar", b);

function Destarray(){
  return [12,66,11,9,22,23]
}

      //const cb = Destarray()
       // const [cb1, cb2,,songo] = Destarray()
       const  [rolas,enempindo, ... values] = Destarray()
      //console.log(values);

      //destructin obj

      const mhs = {
         nama:"zlatan",
         age :38
      }

      const {nama, age} = mhs
      // untuk destucting objek,
      // nama harus sama kalau array bebeas
      //dapat menggunakan nama baru dengan varabel:namabarunya
      //console.log(nama);

      //asaigment variabel baru
      const speda = {
        namaMotor:"ninja 250",
        perseneling : 6,
        rego :"Rp. 23.000.000",
        pabrikan : "jepang"
      }
      //const {namaMotor, perseneling, rego, pabrikan ='indon'} = speda 1 //pabrikan merupakan default value
      const {namaMotor:mtr, perseneling:per, rego:reg, pabrikan ='indon'} = speda

      //console.log(namaMotor);
      const bil1 = [15,10,5,20,25,3,2]
      bil1.push(20)
      bil1.unshift(1)
      bil1.splice(2,8,99) //index nya tidak dimulai dari 0
      //console.log(pek);

      const saring = bil1.filter((m)=>
         m>=10
      ).map(angk=>
         angk * 2
      ).reduce((a1, a2)=>
         a1 + a2, 10
      )
    //  console.log(saring);

    let cobaProm = new Promise((resolve, ricejt)=>{
      const waktu = 3000
      if (waktu<=5000) {
        setTimeout(function() {
        resolve('waktunya pass')
        }, waktu);
      }
      else {
        riject('Waktunya tidak cukup')
      }
    })
    cobaProm
    .then(()=>{console.log(cobaProm)})
    .catch(()=>console.log(cobaProm))

    

</script>
  </body>
</html>
