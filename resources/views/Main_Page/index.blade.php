{{-- terhubung ke file kode_sumber --}}
@extends('MainCode')

@section('Content')
{{-- kode halaman  --}}

{{-- header --}}
<header class="MainHeader" id="MainHeader">
    {{-- menu navigasi --}}
    <nav class="Pre-Login_Navigaion" id="Pre-Login_Navigation">
        {{-- logo navigasi  --}}
        <div class="logo" id="logo">
            <div class="logoImage"><img src="aset/image/Logo_Osis_SMAN_17.png" alt="Logo osis"></div>
            <div class="lettermarks">
                <div class="sup">osis sma negeri 17</div>
                <div class="sub">kabupaten tangerang</div>
            </div>
        </div>

        {{-- daftar link navigasi --}}
        <ul class="MainLink">
            <li class="NavLink"><a class="NavLink_Link">login <i class="dropdown fa-solid fa-chevron-down"></i></a>
                <ul class="DropdownMenu">
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">guru</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">murid</a></li>
                </ul>
            </li>
            <li class="NavLink"><a class="NavLink_Link">profil <i class="dropdown fa-solid fa-chevron-down"></i></a>
                <ul class="DropdownMenu">
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">Identitas OSIS</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">Struktur OSIS</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">Tujuan</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">Visi Misi</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">Program Kerja</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">Historis</a></li>
                </ul>
            </li>
            <li class="NavLink"><a class="NavLink_Link">ekstrakurikuler <i class="dropdown fa-solid fa-chevron-down"></i></a>
                <ul class="DropdownMenu">
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">ekstrakurikuler_1</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">ekstrakurikuler_2</a></li>
                </ul>
            </li>
            <li class="NavLink"><a class="NavLink_Link">alumni <i class="dropdown fa-solid fa-chevron-down"></i></a>
                <ul class="DropdownMenu ">
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">alumni_1</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">alumni_2</a></li>
                </ul>
            </li>
            <li class="NavLink"><a class="NavLink_Link">events <i class="dropdown fa-solid fa-chevron-down"></i></a>
                <ul class="DropdownMenu">
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">events_1</a></li>
                    <li><a href="" class="Sub_NavLink_Link dropdown-item">events_2</a></li>
                </ul>
            </li>
            <li class="NavLink"><a href="" class="NavLink_Link">galeri</a></li>
            <li class="NavLink"><a href="" class="NavLink_Link">hubungi kami</a></li>
            <li class="NavLink"><a href="" class="NavLink_Link">artikel</a></li>
            <li class="NavLink"><a class="NavLink_Link"><i class="fa-solid fa-magnifying-glass"></i></a></li>
        </ul>
    </nav>

    {{-- konten header --}}
    <div class="header_content">
        <div class="Wrap_HeaderContent"></div>

        <div class="layer1">
            <div class="background"></div>
        </div>
        <div class="layer2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <div class="layer3">
            <img src="aset/image/Careena-Alika1.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Ketos_Img" alt="Ketos-2022">

            <div class="Description">
                <p class="welcome">Selamat datang di website resmi</p>
                <h1 class="heading_text">OSIS SMA Negeri 17</h1>
                <h1 class="heading_text text-capitalize">kab. tangerang</h1>

                <div class="detail">
                    <p class="description">Organisasi Siswa Intra Sekolah (OSIS) di SMA Negeri 17 Kabupaten Tangerang merupakan satu dari dua organisasi kesiswaan resmi di SMA Negeri 17 Kabupaten Tangerang, selain Majelis Perwakilan Kelas.</p>
                    <a href="" class="ReadMore">Selengkapnya</a>
                </div>
            </div>
        </div>

        <svg class="SVG_HeaderBottom" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 841.89 51.99"><defs><style>.cls-1{fill:#fff;}</style></defs><title>radius</title><path class="cls-1" d="M420.95,48.92C120.07,48.92,0,0,0,0V52H841.89V0S721.82,48.92,420.95,48.92Z"/></svg>
    </div>
</header>

{{-- informasi osis --}}
<div class="OSIS_Information">
    <div class="Osis_InformationHeader">
        <h2 class="HeaderInformation text-capitalize">bersama majukan sekolah</h2>
        <img src="aset/image/wave-line.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="wave_line" alt="wave-line">
        <p class="DetailInformation">OSIS berkomitmen untuk merancang berbagai program kegiatan yang dapat menunjang kreativitas, kedislipinan dan spiritual siswa.</p>
    </div>
    
    <div class="Main_ContentInformation">
        <div class="ContentInformation1 content">
            <h3 class="title text-capitalize">kegiatan keagamaan</h3>
            <p class="detail">seluruh kegiatan keagamaan dan pembangunan karakter siswa seperti peringatan Isra' Mi'raj, Maulid Nabi Muhammad Saw., dan Pengajian Rutin. </p>
        </div>
        <div class="ContentInformation2 content">
            <h3 class="title text-capitalize">berbagai jenis perlombaan</h3>
            <p class="detail">berbagai jenis perlombaan baik akademik maupun non-akademik seperti SSC, SC, Cerdas Cermat, dan lain-lain.</p>
        </div>
        <div class="ContentInformation3 content">
            <h3 class="title text-capitalize">rasa nasionalisme & cinta tanah air</h3>
            <p class="detail">Mengadakan Upacara rutin setiap hari penting di Indonesia seperti Hari Pahlawan, Kemerdekaan, Pendidikan dan lain-lain</p>
        </div>
    </div>
</div>

{{-- Sekbid Information --}}
<div class="SekbidInformation">
    <img src="aset/image/halftone_background_12.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="halftone" alt="halftone">
    <svg class="SVG_SekbidTop" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 841.89 51.99"><defs><style>.cls-1{fill:#fff;}</style></defs><title>radius</title><path class="cls-1" d="M420.95,48.92C120.07,48.92,0,0,0,0V52H841.89V0S721.82,48.92,420.95,48.92Z"/></svg>

    <div class="SekbidHeader">
        <h3 class="header text-uppercase">bidang</h3>
        <p class="detail">OSIS SMA Negeri 17 Kabupaten Tangerang terbagi menjadi 10 bidang agar dapat fokus menjalankan program kerja dan tugas masing-masing</p>
        <img src="aset/image/wave-line-white.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="wave_line" alt="wave-line">
    </div>
    
    <div class="SekbidContent">
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 1</p>
                <img src="aset/image/bidang-1.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 2</p>
                <img src="aset/image/bidang-2.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 3</p>
                <img src="aset/image/bidang-3.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 4</p>
                <img src="aset/image/bidang-4.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 5</p>
                <img src="aset/image/bidang-5.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 6</p>
                <img src="aset/image/bidang-6.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 7</p>
                <img src="aset/image/bidang-7.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 8</p>
                <img src="aset/image/bidang-8.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 9</p>
                <img src="aset/image/bidang-9.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
        <div class="sekbid text-uppercase">
            <div class="SekbidInfo">
                <p>bidang 10</p>
                <img src="aset/image/bidang-10.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Sekbid_img" alt="Sekbid 1">
            </div>
        </div>
    </div>
</div>

{{-- ketos --}}
<div class="ketos-message">
    <div class="ketos">
        <img src="aset/image/careena.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="Ketos_img" alt="Sekbid 1">
        <div class="description">
            <h3 class="title text-capitalize">pesan ketua OSIS</h3>
            <img src="aset/image/wave-line.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="wave_line" alt="wave-line">
            <p class="detail">"Saya ingin OSIS SMA Negeri 17 Kab.Tangerang menjadi motivator bagi siswa-siswi untuk mau bekerja sama demi tercapainya Visi Misi SMA Negeri 17 Kab. Tangerang dan menciptakan lingkungan sekolah yang aman, nyaman, dan damai bagi seluruh siswa serta menyelenggarakan program yang dapat membawa nama baik SMA Negeri 17 Kab. Tangerang ke tingkat yang lebih tinggi."</p>
            <h4 class="name text-captalize">careena rachma hizriany</h4>
            <p class="period text-capitalize">ketua OSIS periode 2022/2023</p>
        </div>
    </div>
    
    {{-- motivation --}}
    <div class="motivation">
        <div class="content">
            <div class="description">
                <h3>Belajar dan Bekerja Bersama dalam tim untuk Menyukseskan Program Kerja</h3>
                <p>Dalam OSIS kita belajar bekerja bersama dalam setiap program kerja yang telah direncanakan. Mulai dari perencanaan, pembiayaan, pembentukan panitia hingga saat kegiatan berlangsung.Semua juga tidak lepas dari bimbingan para guru yang berperan sebagai pendaming pengurus OSIS.</p>
            </div>
            <div class="box">
                <div class="box1"></div>
                <div class="box2"></div>
            </div>
        </div>
    </div>
</div>

{{-- events --}}
<div class="events">
    <div class="title">
        <h3>events</h3>
        <p>Beberapa Events yang telah direncanakan dan rutin berjalan setiap tahunnya</p>
    </div>

    <img src="aset/image/wave-line.png" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="wave_line" alt="wave-line">

    <div class="events_list">
        <div class="card">
            <img src="aset/image/e1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos mollitia voluptatem quam</p>
            </div>
        </div>

        <div class="card">
            <img src="aset/image/e2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos mollitia voluptatem quam</p>
            </div>
        </div>

        <div class="card">
            <img src="aset/image/e3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos mollitia voluptatem quam</p>
            </div>
        </div>
    </div>

    <a href="" class="see-more text-uppercase">see more events <i class="fa-solid fa-chevron-right"></i></a>
</div>

{{-- ekskul --}}
<div class="ekskul">
    <svg class="SVG_EkskulTop" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 841.89 51.99"><defs><style>.cls-1{fill:#fff;}</style></defs><title>radius</title><path class="cls-1" d="M420.95,48.92C120.07,48.92,0,0,0,0V52H841.89V0S721.82,48.92,420.95,48.92Z"/></svg>

    <div class="img_osis">
        <img src="aset/image/OSIS.jpg" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" class="OSIS_bg" alt="OSIS background">
    </div>

    <div class="ekskul_content">
        <div class="description">
            <h3 class="text-capitalize">program ekstrakurikuler</h3>
            <p>Menyusun program kegiatan ekstrakurikuler yang sistematis dan efektif dengan tujuan untuk mengembangkan minat, bakat, kepemimpinan, kerja tim, dan keterampilan lainnya.Dan mengikutsertakan siswa/i dalam berbagai perlombaan yang berkualitas.</p>
        </div>

        <div class="ekskul_logo">
            <img src="aset/image/Rohis.png" alt="" class="ekskul_icon icon-1">
            <img src="aset/image/Paskib.png" alt="" class="ekskul_icon icon-2">
            <img src="aset/image/Pramuka.png" alt="" class="ekskul_icon icon-3">
            <img src="aset/image/PMR.png" alt="" class="ekskul_icon icon-4">
            <img src="aset/image/KIR.jpeg" alt="" class="ekskul_icon icon-5">
            <img src="aset/image/Perpus.png" alt="" class="ekskul_icon icon-6">
            <img src="aset/image/Rajuta.png" alt="" class="ekskul_icon icon-7">
            <img src="aset/image/padus.jpeg" alt="" class="ekskul_icon icon-8">
            <img src="aset/image/EC.png" alt="" class="ekskul_icon icon-9">
        </div>
    </div>
</div>

{{-- OSIS youtube --}}
<div class="OSIS_Youtube">
    <div class="description">
        <h3>Subscribe Channel Youtube Resmi OSiS SMA Negeri 17 Kabupaten Tangerang</h3>
        <a href="" class="ytb_link">osis17kabta<i class="fa-brands fa-youtube" style="color: #ff0000;font-size: 55px;margin-left: 30px;"></i></a>
    </div>
    <div class="video_ytb">
        <iframe width="435" height="245" src="https://www.youtube.com/embed/TRoZyfJw43A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

{{-- website SMAN 17 --}}
<div class="official_web">
    <h3 class="text-capitalize">website resmi sekolah</h3>
    <a href="" class="official"><img src="Aset/Image/SMAN17.png" alt="logo SMAN 17"></a>
</div>

{{-- journal --}}
<div class="journal">
    <h3 class="text-capitalize">jurnal</h3>

    <div class="jurnal-content">
        <div class="jurnal jurnal-1 card">
            <div class="image">
                <img src="aset/image/j1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-2 card">
            <div class="image">
                <img src="aset/image/j2.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-3 card">
            <div class="image">
                <img src="aset/image/j3.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-4 card">
            <div class="image">
                <img src="aset/image/j4.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-5 card">
            <div class="image">
                <img src="aset/image/j5.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>
        <div class="jurnal jurnal-6 card">
            <div class="image">
                <img src="aset/image/j6.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-7 card">
            <div class="image">
                <img src="aset/image/j7.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-8 card">
            <div class="image">
                <img src="aset/image/j8.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>

        <div class="jurnal jurnal-9 card">
            <div class="image">
                <img src="aset/image/j9.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h3 class="text-capitalize">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolorem est labore ipsa officia reiciendis, id eos...</p>
                <a href="" class="more">selengkapnya</a>
            </div>
        </div>
    </div>
</div>

{{-- footer --}}
<footer class="footer_nav">
    <aside class="side_foot">
        <div class="side1">
            <div class="logo" id="logo">
                <div class="logoImage"><img src="aset/image/Logo_Osis_SMAN_17.png" alt="Logo osis"></div>
                <div class="lettermarks">
                    <div class="sup">osis sma negeri 17</div>
                    <div class="sub">kabupaten tangerang</div>
                </div>
            </div>

            <p class="info">Website resmi OSIS SMA Negeri 17 Kabupaten Tangerang</p>

            <div class="osis-sosmed">
                <a href="" class="sosmed"><i class="fa-brands fa-instagram" style="color: #dadada;"></i></a>
                <a href="" class="sosmed"><i class="fa-brands fa-tiktok" style="color: #dadada;"></i></a>
                <a href="" class="sosmed"><i class="fa-brands fa-youtube" style="color: #dadada;"></i></a>
            </div>
        </div>

        <div class="side2 text-capitalize">
            <h3>legal</h3>

            <a href="" class="link-legal">artikel</a>
            <a href="" class="link-legal">hubungi kami</a>
            <a href="" class="link-legal">pivasi dan kebijakan</a>
        </div>

        <div class="side3">
            <h3 class="text-capitalize">link terkait</h3>

            <a href="" class="sman-link">SMAN 17 Kabupaten Tangerang</a>
        </div>

        <div class="side4">
            <h3 class="text-capitalize">kontak</h3>
            <p>Jalan Raya Legok - Karawaci, Babakan, Kec.Legok, Kabupaten Tangerang, Banten, 15820</p>
            <a href=""><i class="fa-regular fa-envelope" style="color: #dadada;"></i> osissman17kabupatentangerang</a>
        </div>
    </aside>
    <div class="copyright">Copyright &#169; 2023 OSIS SMA Negeri 17 Kabupaten Tangerang. Developed by information and communication technology staff.</div>
</footer>
@endsection