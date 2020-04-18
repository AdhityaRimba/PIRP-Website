<?php 
    $conn = mysqli_connect("localhost", "adhhosts_root", "nothin", "adhhosts_gallery");

    $query = mysqli_query($conn, "SELECT * FROM image");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pesona Indonesia Roleplay, Bermain Game Selayaknya Dunia Nyata">
    <meta name="keywords" content="Roleplay,Indopride,Fivem,Pesona,Indonesia,Vector,Rp,Rl,Real,Life,Game,Games">
    <meta name="author" content="MrAdhit">

    <!-- Javascript Lain -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" class="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">

    <!-- Property Lain -->
    <title>PIRP Official Site</title>
    <link rel="icon" href="img/icon.png">
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
        <nav id="navigasi" class="navbar headtxt navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-3 mr-5">
                <li data-rel="1" class="nav-item active mr-3">
                    <a class="nav-link" href="#">BERANDA</a>
                </li>
                <li data-rel="2" class="nav-item mr-3">
                    <a class="nav-link" href="#" onclick="rulestab()">RULES</a>
                </li>
                <li data-rel="3" class="nav-item mr-3">
                    <a class="nav-link" href="#">GALERI</a>
                </li>
                <li data-rel="4" class="nav-item mr-3">
                    <a class="nav-link" href="#">DISCORD</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <br><br><br><br>

        <!-- Welcome Page -->
        <section>
            <article>
                <div class="container">
                    <div class="txt-atas ml-auto">
                        <div class="headtxt">
                            <div class="row">
                                <div class="col-md">
                                    <h1 class="text-light">SELAMAT <br>DATANG KE</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <h1 class="text-warning">PESONA INDONESIA <br>ROLEPLAY</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-light mt-3 desc">
                                Bermain Game Selayaknya Dunia Nyata
                            </div>
                        </div>
                        <div class="row headtxt mt-3">
                            <div class="col-md">
                                <button type="button" class="btn btn-light mt-3 btn-lg" onclick="playbutton()">MULAI BERMAIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Rules Page -->
        <section style="display: none;">
            <article>
                <div class="container">
                    <div id="rules" class="">
                        <div class="row">
                            <div class="col-md">
                                <h3 class="text-center">Server Rules</h3> <br>
                                     1. Dilarang METAGAMING!<br>
                                      Metagaming sendiri adalah penggambungan antara IC dan OOC, ini sangat dilarang!

                                    Hukuman : Jail OOC 60 Menit, Jika masih melanggar akan di banned permanent !
                                    <br><br>
                                    2. Dilarang POWERGAMING!<br>
                                      Powergaming sendiri adalah melakukan sesuatu yang tidak logic/masuk akal, Contohnya, Jika kalian sudah di /me MENYITA ALKOM dan kalian masih berkomunikasi dengan teman !

                                    Hukuman : Jail OOC 30 Menit, Jika masih melanggar akan di banned permanent !
                                    <br><br>
                                    3. Cheating!<br>
                                      Dilarang keras menggunakan Cheat atau Hack, apabila kedapatan menggunakan Cheat/Hack maka akan dibanned pada saat itu juga !
                                      <br><br>
                                    4. Bug Abussing!<br>
                                      Dilarang keras menggunakan BUG untuk menjalankan RP kalian, Contohnya, Menggunakan BUG untuk menghindari kejaran polisi !

                                    Hukuman : Jika ketahuan akan dikenakan hukuman jail OOC 35 menit, Jika masih melanggar akan di banned permanent !
                                    <br><br>
                                    5. Fail RP!<br>
                                      Dimana kalian melakukan suatu hal yang tidak sesuai RP, Contohnya, Sedang melakukan RP kalian keluar dari permainan dengan sengaja/tanpa alasan !

                                    Hukuman : Jika ketahuan akan dikenakan hukuman jail OOC 45 Menit, Jika masih melanggar akan di banned 7 hari !
                                    <br><br>
                                    6. AFK (Away From Keyboard)<br>
                                      Away From Keyboard atau yang lebih akrab dikenal sebagai AFK, Jika kalian sedang di dalam game dan kalian ada keperluan yang tentu memakan waktu lebih dari 10 menit maka sebaik kalian keluar dari Server, agar RP bisa berjalan dengan lancar, Jika sudah dipanggil tapi tetap tidak nyaut maka player wajib laporkan ke Team agar bisa langsung di kick !
                                    <br><br>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md">
                                <h3 class="text-center">RP Rules</h3> <br>
                                1. Pembegalan <br>
                                Pembegalan/Pencopetan biasanya dilakukan dengan mencari orang orang random, dan tidak ada sangkut pautnya dengan OOC !<br>
                                Peraturan <br>
                                 [-] Hanya bisa meminta 1 barang dari korban ! <br>
                                 [-] Jika ingin meminta uang, maksimal yang boleh diminta adalah $30,000 ! <br>
                                 [-] Minimal Kepolisian ada 2 Dan EMS ada 1 di kota ! <br>
                                 [-] Apabila pembegalan ada di jalan tol, dan harus menaiki mobil maka wajib diberhentikan, jika tidak berhenti boleh menembak ban kendaraan ! <br>
                                 [-] Jangan langsung menembak tanpa alasan ! <br><br>
                                2.Kemanusiaan <br>
                                KEMANUSIAN, YANG HARUS KALIAN LAKUKAN MAUPUN IC ATAU OOC, WALAU INI HANYA GAME TAPI RASA KEMANUSIAAN KALIAN HARUS TETAP ADA ! <br>
                                Contoh <br>
                                  [-] Jika kalian menemui orang pingsan di jalan, tolong dibawa kerumah sakit, agar terciptanya rasa kemanusiaan ! <br><br>
                                3.Adap <br>
                                ADAP DI SINI JUGA HARUS ADA, WALAU INI HANYA GAME TAPI ADAP KALIAN JUGA HARUS TETAP ADA ! <br>
                                Contoh <br>
                                  [-] Jika kalian menemui orang yang kalian tidak kenal, dan tiba tiba menegur kalian, tolong jangan langsung ngegas apalagi ngatain !<br><br>
                                4.Menjual Barang Haram Dan Mencuci Uang <br>
                                APABILA KALIAN INGIN MENJUAL BARANG HARAM KE PLAYER LAIN, TOLONG JANGAN /TWT ATAU /TWEET, KALIAN WAJIB MENCARI ORANG YANG KALIAN TUJU UNTUK MENJUAL BARANG TERSEBUT, JADI POLISI JUGA TIDAK MUDAH MENCARI ORANG ORANG YANG MENJUAL BARANG/INGIN MENCUCI UANG, DAN POLISI PUN JUGA MEMILIKI KERJAAN UNTUK MENCARI ORANG ORANG YANG MENJUAL BARANG HARAM TERSEBUT, JADI BAGI YANG INGIN IKLAN, BISA MEMBAYAR ORANG UNTUK MENGIKLANI BISNIS KALIAN !<br>
                                Contoh <br>
                                [-] Apabila kalian ada di garasi kota dan ada orang yang kebetulan juga berada di garasi kota, nah kalian ingin menjual/mencuci barang kalian wajib samparkan orang tersebut dan kalianpun bisa menjualnya ! <br><br>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md">
                                <h3 class="text-center">Robbery Rules</h3><br>
                                1. Perampokan Lojas !<br>
                                Perampokan lojas minimal polisi ada 3 orang dan para perampok maksimal 4 Orang, dan senjata yang digunakan adalah Pistol.50/Pistol Termasuk Polisi, dilarang keras menggunakan APPISTOL karena APPISTOL hanya boleh digunakan saat perampokan Bank atau Jewel <br><br>

                                *Attention! : Polisi yang datang maksimal ada 4 orang dan perampok hanya boleh 4 orang, tidak ada backupan atau lain semacamnya <br><br>

                                2. Perampokan Jewelry !<br>
                                Perampokan Jewelry minimal polisi ada 5 orang dan para perampok maksimal 6 orang, dan senjata yang digunakan adalah 2 Laras Panjang dan 1 Sniper, sisanya bisa memakai Pistol.50, Pistol, Dan AP Pistol, Beda dengan polisi, Polisi hanya boleh menggunakan 1 sniper dan sisanya bisa menggunakan laras panjang atau pistol, jika kedapatan yang memakai laras panjang ada 3 Orang maka itu jatohnya menjadi fail RP dan akan dikenakan Jail OOC 45 Menit !
                                <br><br>
                                *Attention! : Polsi maksimal yang datang ada 6 polsi dan perampok maksimal 6 perampok, tidak ada backupan atau hal lain semacamnya 
                                <br><br>
                                3. Perampokan Bank !<br>
                                Perampokan Bank minimal polisi ada 6 orang dan para perampok maksimal 7 orang, dan senjata yang digunakan adalah 2 Laras Panjang dan 1 Sniper, Sisanya bisa memakai Pistol.50, Pistol, Dan AP Pistol, Beda dengan polisi, Polisi hanya boleh menggunakan 1 sniper dan  sisanya bisa menggunakan laras panjang atau pistol, Jika kedapatan yang memakai laras panjang ada 3 Orang maka itu jatohnya menjadi fail RP dan akan dikenakan Jail OOC 45 Menit !
                                <br><br>
                                *Attention! : Polisi maksimal yang datang ada 7 polisi, dan perampok maksimal 7 orang, tidak ada backupan atau hal lain semacamnya
                                <br><br>
                                4. Perampokan Bank Besar !<br>
                                Perampokan Bank Besar minimal polisi ada 7 dan para perampok maksimal 9 orang, dan senjata yang digunakan adalah Laras Panjang dan 1 Sniper, Begitu pun juga dengan Polisi !
                                <br><br>
                                *Attention! : Polisi bisa datangkan seluruh anggota, dan para perampok maksimal 9 orang, tidak ada backupan dan hal lain semacamnya !
                                <br><br>
                                5. Dalam Seluruh Perampokan Maupun Lojas, Jewel, Ataupun Bank Sekalipun, Polisi Wajib Bernegoisasi Maupun Ada Sandera Atau Pun Tidak Ada Sandera, Jika Tidak Bernegoisasi Maka Akan Jatohnya Fail Rp ! Dan Hukumannya Adalah 45 Menit Jail Ooc !
                                <br><br>
                                6. Delay Perampokan, Adalah 35 Menit, Kurang Dari Itu Akan Dibuat Fail Rp !
                                <br><br>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md">
                                <h3 class="text-center">Zona Rules</h3><br>
                                1. GREEN ZONE ! <br>
                                  [-] Green zone atau Zona Hijau, adalah zona aman yang yang dilarang keras untuk melakukan aksi kejahatan, baik secara RP atau tidak RP
                                  <br>
                                Contoh" Tempat Zona Hijau/Green Zone diantara lain : <br>
                                  [+] KANTOR POLISI <br>
                                  [+] RUMAH SAKIT <br>
                                  [+] GARASI KOTA <br>
                                  [+] BENGKEL/BENNYS <br>
                                  [+] KANTOR TAXI <br><br>

                                Hukuman : Jika ada kedapatan yang berbuat rusuh di list yang di atas, maka akan dikenakan hukuman Jail OOC 45 Menit dan apabila masih melakukan, mau atau tidak mau akan dikenakan banned permanent!.<br><br>
                                2. RED ZONE <br>
                                  [-] Red Zone atau Zona Merah, adalah zona yang tidak aman, disana kalian bisa melakukan peperangan, kejahatan, dan tembak tembakan, tapi tetap semua itu juga harus ada alasan tersendiri, dan wajib secara RP !
                                  <br><br>
                                Contoh" Tempat Zona Merah/Red Zone diantara lain :<br>
                                  [+] Seluruh Ladang <br>
                                  [+] Tempat penjualan senjata haram <br>
                                  [+] Tempat cuci uang <br>
                                  [+] Tempat obat-obatan terlarang <br>
                                  <br>
                                Hukuman : Jika ada kedapatan yang berbuat rusuh secara tidak RP, maka akan dikenakan hukuman Jail OOC 45 Menit dan apabila masih melakukan, mau tidak mau akan dikenakan banned permanent!.<br><br>
                                3. NEUTRAL ZONE <br>
                                  [-] Neutral Zone atau Zona Netral, adalah zona yang bebas mau melakukan apapun, baik membegal, menodong, berbuat baik, peperangan, dan dll, tapi tetap semua itu juga harus ada alasan tersendiri, dan wajib secara RP !
                                  <br><br>
                                Contoh" Tempat Zona Netral/Neutral Zone diantara lain :<br>
                                  [+] Jalan Tol <br>
                                  [+] Jalan Raya <br>
                                  [+] Pantai <br>
                                  [+] Gang Kecil <br>
                                  [+] Gas Station <br>
                                  [+] Toko Lojas <br><br>

                                Hukuman : Jika ada kedapatan yang berbuat rusuh secara tidak RP, maka akan dikenakan hukuman Jail OOC 35 Menit dan apabila masih melakukan, mau tidak mau akan dikenakan banned permanent!.<br><br>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md">
                                <h3 class="text-center">Badside Rules</h3>
                                1. Peperangan antar fraksi <br>
                                Peperangan antar fraksi hanya boleh dilakukan dengan alasan tertentu, dan hanya boleh di zona merah dan zona netral, lain dari 2 zona tersebut akan dinyatakan Fail RP dan dikenakan hukuman JAIL OOC 45 menit <br><br>
                                2. Kekuasaan wilayah <br>
                                Fraksi bisa menguasai beberapa wilayah tertentu, dan list yang bisa dikuasai oleh badside antara lain <br>
                                 - Daerah Sandy Shoers <br>
                                 - Seluruh Zona Merah <br>
                                 - Garasi Kota <br>
                                 - Jalan tol kanan dan kiri <br><br>
                                3.  Begal & Menyandra <br>
                                 - Begal      : Penodongan yang bisa menggunakan senjata hanya untuk mengambil barang kepada korban !<br>
                                 - Sandera    : Penodongan yang bisa menggunakan senjata untuk mengelabui polisi agar permintaan bisa terkabulkan !<br><br>
                                4. Tidak ada EMS dikota <br>
                                Apabila EMS/PMI sedang tidak ada dikota, Fraksi bisa melakukan tindak kriminal, tapi tidak bisa melakukan Pembunuhan terhadap warga, Perang, Dan Perampokan, Fraksi hanya bisa melakukan pembegalan yang tidak boleh memakan korban jiwa, dikarenakan EMS/PMI tidak ada dikota !<br><br>
                                5. Persenjataan <br>
                                Fraksi tidak disediakan membeli senjata di dalam kantor, dan harus mencari senjata di tempat penjualan senjata ilegal, dikarenakan apabila fraksi bisa membeli senjata di dalam kantor, Persenjataan ilegal bisa tidak akan berjalan lancar <br><br>
                                6. Ladang Ganja, dan lain lain <br>
                                Apabila para Fraksi ingin berladang minimal harus ada 2 polisi di kota ! apabila ketahuan ngeladang pas polisi tidak ada dikota, maka akan dikenakan hukuman berupa JAIL OOC 25 Menit !
                            </div>
                        </div>
                    </div>
                </div>                
            </article>
        </section>

        <!-- Gallery Page -->
        <section style="display: none;">
            <article>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <?php while($url = mysqli_fetch_assoc($query)) : ?>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                   data-image="<?= $url["url"]; ?>"
                                   data-target="#image-gallery">
                                    <img class="img-thumbnail"
                                         src="<?= $url["url"]; ?>"
                                         alt="Jika Kata Kata Ini Muncul Lapor Ke Staff PIRP">
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="image-gallery-title"></h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                        </button>

                                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Discord Widget Page -->
        <section style="display: none;">
            <article>
                <div class="container text-center">
                    <iframe src="https://discordapp.com/widget?id=695883380444758036&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                </div>
            </article>
        </section><br><br>

    <!-- Javascript Local -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Javascript Bootstrap Default -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>