<!DOCTYPE html>
<html lang="tr" >
<head>
  <meta charset="UTF-8">
  <title>Kuaför Zinciri</title>
  <link rel="stylesheet" href="{{asset('style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  </head>
<body>
<header>
  <nav id="navbar">
    <div class="container">
       <h1 class="logo"><a href="index.html">Türkiyenin #1 Numarası</a></h1>
          <ul>
             <li><a href="{{route('logout')}}">Çıkış Yap</a></li>
              <li><a href="{{route('userReports')}}">Duyurular</a></li>
              <li><a href="{{route('userChat')}}">İletişime Geç</a></li>
          </ul>
    </div>
  </nav>


  <div id="showcase">
    <div class="container">
      <div class="showcase-content">
        <h1><span class="primary"  >Hoş Geldiniz</span> {{Auth::user()->email}} </h1>
    <p>İster siz bize gelin, isterseniz biz size. Rahatınız nasıl isterse.</p><br>
      </div>
    </header>

        <section id=home-info class="bg-dark">
          <div class ="info-img"></div>
          <div class="info-content">
            <h2>Mağaza Tarihimiz</h2>
            <p>Kapılarını ilk kez 1948 yılında açan berber dükkanımız, İstanbul'un kalbinde üç nesildir değişmeyen bir tutkuyla hizmet vermektedir. Kurucumuz Mehmet Usta'nın elinden çıkan her saç kesimi, sadece bir hizmet değil, aynı zamanda bir sanat eseriydi. O günlerden bugüne, makaslarımızın keskinliği kadar, müşterilerimizle kurduğumuz bağın da sağlamlığıyla gurur duyuyoruz.</p>
          </div>
        </section>
   <section>
     <div id="features">
       <div class="box">

         <div id="icon-1"><img src="https://cdn1.iconfinder.com/data/icons/barbershop-1/154/barbershop-barber-hair-scissors-512.png" alt="icon1"></div>
         <h3>Stil Yönetimi</h3>
         <p>İşinize, tipinize ve tarzınıza uygun model bulmakta zorlanıyor musunuz? Seçenek değil çözüm sunuyoruz!</p>
       </div>

         <div class="box bg-primary">

           <div id="icon-2" ><img src="https://cdn1.iconfinder.com/data/icons/barbershop-1/154/barbershop-barber-shaver-style-hair-512.png" alt="img2"></div>
         <h3>Kişisel Eşyaları</h3>
         <p>Tek sefere mahsus aldığımız ek ücretle size özel ekipmanlar edinip tümünü şahsınıza özel olarak kullanıyoruz?</p>
       </div>

         <div class="box">
          <div id="icon-3"><img src="https://cdn2.iconfinder.com/data/icons/app-types-in-grey/512/beauty_512pxGREY.png" alt="icon3"></div>
         <h3>Moda</h3>
         <p>Modayı takip etmekle uğraşmayın, biz sizin yerinize onu da yapıyoruz!</p>
       </div>

     </div>

    </section>
      </div>
    </div>
  <div class="clr"></div>
  <footer id="primary-footer">
    <p> Alihan Özcan&copy;2024</p>


  </footer>


  </body>
</html>
