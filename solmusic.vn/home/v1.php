<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
        <link rel="icon" type="image/png" href="../assets/images/icon-title.png" />
        <title>CloudMusic Station Merchant Tool</title>
        <link href="../assets/font-google/css/font-google-home.css" rel="stylesheet" type="text/css" />
        <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> 
        <link href="../assets/css/vendor/bootstrap.css" rel="stylesheet" type="text/css" />    
        <link href="../assets/css/vendor/superslides.css" rel="stylesheet" type="text/css" />     
        <link href="../assets/css/vendor/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/vendor/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../assets/css/vendor/flickity.min.css">
        <link rel="stylesheet" href="../assets/css/vendor/swipebox.min.css">
        <link rel="stylesheet" href="../assets/css/vendor/TimeCircles.css">
        <link href="../assets/css/intro-slider.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/slick-theme.css" rel="stylesheet" type="text/css" /> 
        <link href="../assets/css/slick.css" rel="stylesheet" type="text/css" /> 
        <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/vendor/animate.min.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" type="text/css" href="../assets/css/vendor/jquery-confirm.css" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="../assets/js/vendor/modernizr.js" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/d7b1e20284.js" crossorigin="anonymous"></script>
        
    </head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">
  <!-- LOADER -->
  <div id="mask">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
        
<!-- HEADER -->
  <header id="jHeader">
    <nav class="navbar navbar-default " role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#anchor00"><img src="../assets/images/logo.png" alt="logo" style="margin-top: -22px;"></a>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="">Home</a></li>
          <li><a href="#anchor03">Playlist</a></li>
          <li><a href="#" class="contactsky">Contact</a></li>
          <li><a href="../auth/login.php">Login</a></li>
          <li><a href="#" class="createpl">Sign Up</a></li>
        </ul>
      </div>
    </nav>
  </header><input type="hidden" value="0" id="islogin"/>
          
  <!-- INTRO -->
  <section class="intro full-width jIntro" id="anchor00" style="margin-top:93px;">
    <div id="intro-carousel" class="carousel slide carousel-fade" data-pause="false">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#intro-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#intro-carousel" data-slide-to="1" ></li>
        <li data-target="#intro-carousel" data-slide-to="2" ></li>
        <li data-target="#intro-carousel" data-slide-to="3" ></li>
        <li data-target="#intro-carousel" data-slide-to="4" ></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- First slide -->
        <div class="item active intro-fullscreen">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('../../img.solmusic.vn/xmusicstation/album/Chill\ Lounge.jpg');"></div>
          <div class="carousel-caption intro-center">
            <h1 data-animation="animated fadeIn" class="primary-title">Chill lounge</h1>
            <h2 data-animation="animated fadeIn" class="subtitle-text"></h2>
          </div>
        </div><!-- /.item -->
        <!-- Second slide -->
        <div class="item">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('../../img.solmusic.vn/xmusicstation/album/Cloudy.png');"></div>
          <div class="carousel-caption p-intro-animate">
            <p data-animation="animated fadeIn">Cloudy</p>
            <a class="intro-link" href="#0" data-animation="animated fadeIn"></a>
          </div>
        </div><!-- /.item -->
        <!-- Third slide -->
        <div class="item title-alt">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('../../img.solmusic.vn/xmusicstation/album/EDM\ Head.png');"></div>
          <div class="carousel-caption">
            <p data-animation="animated fadeInUp">EDM Head</p>
            <div data-animation="animated fadeInUp" class="animate-btn-alt">
              <input class="btn square stay-in-touch-submit createpl" type="submit" name="button" value="Create album">
            </div>
          </div>
        </div><!-- /.item -->
        <!-- Second slide -->
        <div class="item">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('../../img.solmusic.vn/xmusicstation/album/Best\ To\ Our\ Girl.png');"></div>
          <div class="carousel-caption p-intro-animate">
            <p data-animation="animated fadeIn">Best To Our Girl</p>
            <a class="intro-link" href="#0" data-animation="animated fadeIn"></a>
          </div>
        </div><!-- /.item -->
        <!-- First slide -->
        <div class="item  intro-fullscreen">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('../../img.solmusic.vn/xmusicstation/album/Be\ Okay.png');"></div>
          <div class="carousel-caption intro-center">
            <h1 data-animation="animated fadeIn" class="primary-title">Be Okay</h1>
            <h2 data-animation="animated fadeIn" class="subtitle-text"></h2>
          </div>
        </div><!-- /.item -->
      </div><!-- /.carousel-inner -->
    </div><!-- /.carousel -->
  </section>
  <!-- PLAYER -->
  <div class="player horizontal">
    <div class="container">
      <div class="info-album-player">
        <div class="album-cover" style="background: url('../../img.solmusic.vn/xmusicstation/album/Best\ To\ Our\ Girl.png');background-size: 96px 54px;background-repeat: no-repeat;" id="bg-image3" ></div>
        <p class="album-title"></p>
        <p class="artist-name">Best To Our Girl</p>
      </div>
      <div class="player-content">
        <audio preload></audio>
        <ol class="playlist">
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui976/MuonRuouToTinh-EmilyBigDaddy-5871420_hq.mp3?st=JNDCXrzIM8kwRZkqH_tT9A&amp;e=1637823354">Mượn Rượu Tỏ Tình</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Sony_Audio57/ThuongEmLaDieuAnhKhongTheNgo-NooPhuocThinh-5827347_hq.mp3?st=bz5YFGCHlxLHlQnTMoSgFQ&amp;e=1637823354">Thương Em Là Điều Anh Không Thể Ngờ</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui968/LoYeuEmRoiBaoGioHetEOst-SMELOD-5663543_hq.mp3?st=QKFO_JxiPe333GVd3T08WA&amp;e=1637823354">Lỡ Yêu Em Rồi (Bao Giờ Hết Ế OST)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui937/MuonYeuAiDoCaCuocDoi-HoangYenChibiTino-4776678_hq.mp3?st=X2AAWaJTgqByUeeBLoxXxA&amp;e=1637823354">Muốn Yêu Ai Đó Cả Cuộc Đời</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui933/NayEmOiMinhYeuDi-TheBaoNamKun-4715851_hq.mp3?st=9C5711k_9Ylr55BZ7Gj4Pw&amp;e=1637823354">Này Em Ơi... Mình Yêu Thôi</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui924/TaLaCuaNhau-DongNhiOngCaoThang-4113753_hq.mp3?st=6Xo_OzZJsHoNrm4mtRqS5Q&amp;e=1637823354">Ta Là Của Nhau</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Singer_Audio5/MyEverything-TienTien-3847147_hq.mp3?st=HT1C3gXYN880Pn1AEIzLjA&amp;e=1637823354">My Everything</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1011/PhaiChangEmDaYeu-JukySanRedT-6940932_hq.mp3?st=MQc7McetjdSsiKlzrvqzOA&amp;e=1637823354">Phải Chăng Em Đã Yêu?</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui836/LaEmDo-VanMaiHuongMr.A-2664158_hq.mp3?st=yKO48d1YH-ApL45iuE2Zaw&amp;e=1637823354">Là Em Đó</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui922/DCMADauCanMotAi-TocTienBigDaddyTouliverLongHaloAndree-3850127_hq.mp3?st=x9NLjQPOUNN4zTigdCAOgQ&amp;e=1637823354">Đ.C.M.A (Đâu Cần Một Ai)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui995/DoForLove-AMeeBRay-6221980_hq.mp3?st=A1zzne3huQtFQex_IEf1fQ&amp;e=1637823354">Do For Love</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui981/DauCanMotBaiCaTinhYeu-TienTienTrang-5945602_hq.mp3?st=jDnNAPAurgxyA_sxR0ZsJw&amp;e=1637823354">Đâu Cần Một Bài Ca Tình Yêu</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio138/Mo-VuCatTuong-5958629_hq.mp3?st=IrfclruqxlQ9ZcQwQFvSlw&amp;e=1637823354">Mơ</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui909/ViToiConSongVersionAcoustic-TienTien-4157182_hq.mp3?st=fFee-_prORuzrlvwmxEjNA&amp;e=1637823354">Vì Tôi Còn Sống (Version Acoustic)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui996/TraiDatDepNhatKhiCoEm-DucPhucViruSs-6238530_hq.mp3?st=ZL5bLajYVM13Wy1atsJWlw&amp;e=1637823354">Trái Đất Đẹp Nhất Khi Có Em</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1005/LoiDuongMat-LylyHIEUTHUHAI-6802155_hq.mp3?st=sJuwuQtaxD1pL9OkhbbIbA&amp;e=1637823354">Lời Đường Mật</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Singer_Audio5/SuyNghiTrongAnh-KhacViet-2435503_hq.mp3?st=2I6yWkiZe6BZUWjp62nn2A&amp;e=1637823354">Suy Nghĩ Trong Anh</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio198/GaiDocThan-tlinh-7041472_hq.mp3?st=vJmQucTDIsTLU2ZWN3513g&amp;e=1637823354">Gái Độc Thân</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1018/ThucGiac-DaLAB-7048212_hq.mp3?st=vW4WPc7zfG_C9WHO5yY5-A&amp;e=1637823354">Thức Giấc</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui995/NgayTanThe-TocTienDaLABTouliver-6226260_hq.mp3?st=Ck1aVMnScC6tpSs9D9GxGA&amp;e=1637823354">Ngày Tận Thế</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1004/CoEmMoiBuocAnhDi-DaLAB-6680315_hq.mp3?st=oD8BTI7SNUTYp_H2xanTcw&amp;e=1637823354">Có Em Mỗi Bước Anh Đi</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui934/DieuUocGianDon-AkiraPhan-2437733_hq.mp3?st=4eeR2CWvu37TXs_cXlhynw&amp;e=1637823354">Điều Ước Giản Đơn</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui967/NguoiThuong-HoangTon-5582141_hq.mp3?st=6Z8hoclvUMp-qf82OJfeKA&amp;e=1637823354">Người Thương</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui979/ChangDeEmXaAnh2-DucPhuc-5912887_hq.mp3?st=bu8nn5xYc_WpNU1N2B41zg&amp;e=1637823354">Chẳng Để Em Xa Anh</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui968/YeuAnhEmNhe-HuyTungViu-5645223_hq.mp3?st=kkwwttxoUlU4TmglC92Inw&amp;e=1637823354">Yêu Anh Em Nhé</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1003/CoGaiVang-HuyRTungViu-6617041_hq.mp3?st=tYTukbMwo3hUfkQctrqVhQ&amp;e=1637823354">Cô Gái Vàng</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui993/LayChongSomLamGiAcousticVersion-HuyRTuanCry-6185772_hq.mp3?st=R6EhIaPBiwmi3UjXhhqSTQ&amp;e=1637823354">Lấy Chồng Sớm Làm Gì (Acoustic Version)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio164/DuongTaChoEmVe-buitruonglinh-6318765_hq.mp3?st=qeL4vP5ta7A-NxkxX_pLag&amp;e=1637823354">Đường Tôi Chở Em Về</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1007/DuChoMaiVeSauAcousticVersion-buitruonglinh-6853567_hq.mp3?st=jgLs_ddVIzxJr5n_vOZp8g&amp;e=1637823354">Dù Cho Mai Về Sau (Acoustic Version)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1001/NangTho-HoangDung-6413381_hq.mp3?st=nd7LJrpJucP6L9oQVfZiDA&amp;e=1637823354">Nàng Thơ</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1011/TrenTinhBanDuoiTinhYeu-MIN16Typh-6938265_hq.mp3?st=lg_KZd1uISay7cdxHyvEOg&amp;e=1637823354">Trên Tình Bạn Dưới Tình Yêu</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1008/ChiCoTheLaYeu-NgoKienHuyChiTam-6889302_hq.mp3?st=V0XENq_n7eMoKokOOTsHLQ&amp;e=1637823354">Chỉ Có Thể Là Yêu (Em Là Của Em OST)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1016/HamNong-Emily-7019202_hq.mp3?st=g0DNPYOou4QXMRCh70TFgQ&amp;e=1637823354">Hâm Nóng</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1013/VachNgocNga-AnhRong-6984991_hq.mp3?st=8-j1l4c0THoTcg7Vyo6tPA&amp;e=1637823354">Vách Ngọc Ngà</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1019/GapGoYeuDuongVaDuocBenEm-PhanManhQuynh-7061898_hq.mp3?st=oOfmwIwwQQPvvoPQuf-_VA&amp;e=1637823354">Gặp Gỡ, Yêu Đương Và Được Bên Em</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1020/cohenvoithanhxuan-MONSTAR-7050201_hq.mp3?st=l0cVpEPMdQG7AkyDOG8xIw&amp;e=1637823354">có hẹn với thanh xuân</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio198/ThichEmHoiNhieu-WrenEvans-7034969_hq.mp3?st=Zhx9LkLOEf_80eWgQ-Jbfw&amp;e=1637823354">Thích Em Hơi Nhiều</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1017/EmKhongHieu-ChanggMinhHuy-7043556_hq.mp3?st=Jv8O2B3XcyP3JI9whnA1yA&amp;e=1637823354">Em Không Hiểu</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui924/Lalala-SoobinHoangSon-4510827_hq.mp3?st=4DsxW_SEwKcq-s2rDh45zQ&amp;e=1637823354">Lalala</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui798/NguoiNaoDo-JustaTee_4g8ew_hq.mp3?st=BNcOFrSpvbFu2J_40lyO2A&amp;e=1637823354">Người Nào Đó</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui903/2am-JustaTeeBigDaddy-4067498_hq.mp3?st=EvmN9n8L6eAgXEuMCsFgrQ&amp;e=1637823354">2AM</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1010/Huong-VanMaiHuongNegav-6927340_hq.mp3?st=CBnwzt1hyBlxRV-GaMPXlw&amp;e=1637823354">Hương</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui995/CoEmDoiBongVui-Chillies-6217930_hq.mp3?st=WFuq7lpZ1Gik_sb_Z8ncgg&amp;e=1637823354">Có Em Đời Bỗng Vui</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui996/EmCoNghe-Kha-6228140_hq.mp3?st=F5T-BfBlaAtd58l2Rivynw&amp;e=1637823354">Em Có Nghe</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui986/AiDuaEmVe-TiaHaiChauLeThienHieu-6037113_hq.mp3?st=eZTvLh1CBO3ZPYywl69ONw&amp;e=1637823354">Ai Đưa Em Về</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1009/ThuanEmThuanAnhAcousticVersion-HienMaiTheVoice-6902151_hq.mp3?st=5wpB4OR_bBwMiEt4_7IgCw&amp;e=1637823354">Thuận Em Thuận Anh (Acoustic Version)</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui988/SoClose-BinzPhuongLy-6057836_hq.mp3?st=qQMNR8T2YPv7o1tkdMq8EQ&amp;e=1637823354">So Close</a></li>
            <li><a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui903/PhiaSauEm-KayTranBinz-4073724_hq.mp3?st=cnwiegCny3avrl5q75VmBQ&amp;e=1637823354">Phía Sau Em</a></li>
        </ol>
        <div class="nextprev">
          <span class="prev">prev</span>
          <span class="next">next</span>
        </div>
        <span class="btnloop">loop</span>
      </div>
    </div>
  </div>
  <!-- LATEST ALBUM -->
  <section class="section latest-album" id="anchor01">
    <div class="container">
      <div class="voffset70"></div>
      <div class="title-wrapper">
        <h2 class="title">LATEST ALBUM</h2>
      </div>
      <div class="voffset80"></div>
      <div class="row">
        <div class="col-md-5">
          <div class="info-album">
            <div class="cover">
              <img src="../../img.solmusic.vn/xmusicstation/album/V-Pop In October, 2021.png"  alt="">
            </div>
            <p class="album album-list">V-Pop in May, 2022</p>
            <p class="artist"></p>
            <div class="voffset20"></div>
            <p class="buyalbum">
              <a href="#" class="btn square inverse createpl">Create Playlist</a>
            </p>
            
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="disc-tracklist" style="overflow-y:scroll;max-height:500px;">
            <audio preload id="playlist_newalbum"></audio>
            <ol class="playlist1" >
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/YeuHetTamThanNay-PhungKhanhLinhJoshFrigo-7080574_hq.mp3?st=8wfDHdbtZb5gxPz_NYht0g&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Yêu Hết Tấm Thân Này</p>
                    <p class="track-album">Phùng Khánh Linh,Josh Frigo</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/HanhPhucLaKhi-JunPham-7080257_hq.mp3?st=_l83AWFVhy-rqVMtJZI05w&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Hạnh Phúc Là Khi...</p>
                    <p class="track-album">Jun Phạm</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/AnhSaoVaBauTroi-TRI-7085073_hq.mp3?st=DDh0dKjFmcgFBeZLcsW25Q&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Ánh Sao Và Bầu Trời</p>
                    <p class="track-album">T.R.I</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/ConLaiMinhEm-ThuTrangTranVu-7095774_hq.mp3?st=uF9xJgLtzZ6lVDhghmZ-qg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Còn Lại Mình Em</p>
                    <p class="track-album">Thu Trang,Trần Vũ</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/ChiConLaiHaiTa-PhungKhanhLinh-7080575_hq.mp3?st=hsgJnmkPVKcbgxVZYQWqLA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Chỉ Còn Lại Hai Ta</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/ChiBuonHomNay-PhungKhanhLinh-7080576_hq.mp3?st=84vVW16KwpDTzG2XIxjWDg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Chỉ Buồn Hôm Nay</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/11Thang5Ngay-DangCapNhat-7088237_hq.mp3?st=_LTCHRUYF_0WOasZ26-jNw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">11 tháng 5 ngày</p>
                    <p class="track-album">Nguyễn Đặng Châu Anh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/LuaChonThichHop-VuongAnhTu-7089308_hq.mp3?st=6Pi0Vo6JUD2cq7SuubEb8Q&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Lựa Chọn Thích Hợp</p>
                    <p class="track-album">Vương Anh Tú</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/LaThu100-PhungKhanhLinh-7080577_hq.mp3?st=L2UVq0q4Phg4a2ha3MynCw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Lá Thư #100</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/Mpg-PhungKhanhLinh-7080578_hq.mp3?st=B4FSNJNjFhR4wbll2x18Jg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Mpg</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/LoDuyen-DangCapNhat-7091099_hq.mp3?st=aAK_T-GaEqR59iu80eEKLg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Lỡ Duyên</p>
                    <p class="track-album">TranG (Trẻ)</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/PhanDuyen-DucAnhHuyVac-7092190_hq.mp3?st=HhfzNtVOkMK6ny3XNZ35ZQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Phận Duyên</p>
                    <p class="track-album">Đức Anh,Huy Vạc</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/DungThaThinh-PhungKhanhLinh-7080579_hq.mp3?st=hIsKVnN_dmc_w_fp4illcA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Đừng Thả Thính</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/MeMe-DEyes-7095863_hq.mp3?st=RP9fHvEr0it0BgeFNTof0g&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Mê Mê</p>
                    <p class="track-album">D Eyes</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/IchKy-AiPhuong-7080641_hq.mp3?st=CTZSwtj-FiaZtBhlvFidfA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Ích Kỷ</p>
                    <p class="track-album">Ái Phương</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/ThanhXuanCoNhau-Rin-7079863_hq.mp3?st=fQPNOWNrhMOy_NC2ZKjboQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Thanh Xuân Có Nhau</p>
                    <p class="track-album">Rin (Việt Nam)</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/AnhDaKhongRoRangVoiEm-PhungKhanhLinhMYRNE-7080580_hq.mp3?st=56cNPWkwOTwxn0DEfB-29g&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Anh Đã Không Rõ Ràng Với Em</p>
                    <p class="track-album">Phùng Khánh Linh,Myrne</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/DuCaChangXungThienNga-BuiVinhPhuc-7084511_hq.mp3?st=0ZhcNvC7pvDALOCeJ6NzHQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Du Ca Chẳng Xứng Thiên Nga</p>
                    <p class="track-album">Bùi Vĩnh Phúc</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/LoveIsLove-YangVyNguyenTrungDuc-7083553_hq.mp3?st=qHu4fGACQT8wSW8s2FQtew&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Love Is Love</p>
                    <p class="track-album">Yang Vy,Nguyễn Trung Đức</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/SaoAnhKhongHieu-PhungKhanhLinh-7080581_hq.mp3?st=jcd-PiCuoSJmYmiTi22XEw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Sao Anh Không Hiểu?</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/TheGioiKhongAnh-PhungKhanhLinh-7080582_hq.mp3?st=tCeiP7ugtlC45NDOtxpttw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Thế Giới Không Anh</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1024/HoaMocLan-QiLDuong-7084142_hq.mp3?st=pGjO1P_wzJ9w_MU7w6dpbw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Hoa Mộc Lan</p>
                    <p class="track-album">QiL Dương</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/ChungTaNamAy-DatMax-7084816_hq.mp3?st=CCGMJpTIcvWtOymVW9snSQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Chúng Ta Năm Ấy</p>
                    <p class="track-album">Đạt Max</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/TronNhauCaDoi-TEVRhung-7085103_hq.mp3?st=MX-aiFT0FsHSkoks8okrhw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Trốn Nhau Cả Đời</p>
                    <p class="track-album">TEVR,h ư n g</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/LacNhauGiuaTroi-NguyenHy-7085135_hq.mp3?st=GQhzmqZiYt71fr260TAHVA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Lạc Nhau Giữa Trời</p>
                    <p class="track-album">Nguyên Hy</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/CuoiThoi-MasewMasiuBRayTAPVietNam-7085648_hq.mp3?st=NB9lyKgzgcoVTNl_LJn2Kw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Cưới Thôi</p>
                    <p class="track-album">Masew,Masiu,B Ray,TAP (Việt Nam)</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1019/NgaiNoi-TuDaoEzFluv-7061634_hq.mp3?st=W1nKY7vvGeKPPnUXOlFClg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Ngại Nói</p>
                    <p class="track-album">Tú Đào,Ez.Fluv</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/CoGaiNhanAi-PhungKhanhLinh-7080583_hq.mp3?st=zHj83uUMnCkRW8fdH1slpw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Cô Gái Nhân Ái</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1016/TinhThuongPhuThe-ChiHuong-7024958_hq.mp3?st=YsyQQYj5eyCboxJnxzoovA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Tình Thương Phu Thê</p>
                    <p class="track-album">Chí Hướng</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/LamVoAnhDuocChua-VuongThienTuan-7088284_hq.mp3?st=WhnnYFGPMzIH3ggUtfS_lg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Làm Vợ Anh Được Chưa</p>
                    <p class="track-album">Vương Thiên Tuấn</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/HoaTieuDao-PhungKhanhLinh-7080584_hq.mp3?st=VsErDQ8Fylum9XqtpFsxTw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Hoa Tiêu Dao</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/CheGiauNoiCoDon-CaoNamThanh-7090717_hq.mp3?st=r-37gNNpSci60vKDDZ2g0Q&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Che Giấu Nỗi Cô Đơn</p>
                    <p class="track-album">Cao Nam Thành</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/ConKhong-DuongPhuHau-7090738_hq.mp3?st=dQRGq0bZIvWiCTSuT7rXjg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Còn Không</p>
                    <p class="track-album">DuongPhuHau</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/CuocTinhLamLo-KaleeHoang-7092370_hq.mp3?st=R8QDkePEDeeibtRoBtxCTQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Cuộc Tình Lầm Lỡ</p>
                    <p class="track-album">Kalee Hoàng,Thành Tar</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/GoiTinhEmRoiVe-PhungKhanhLinh-7080585_hq.mp3?st=VaLjeomKrh1LZwWU4FKPcQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Gói Tình Em Rồi Về</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/QuaKhuDepDe-KaleeHoangCuong-7092819_hq.mp3?st=Jmsi6jUp7gpTDgUZ8LIDdw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Quá Khứ Đẹp Đẽ</p>
                    <p class="track-album">Kalee Hoàng,Cường</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/TanVer-TuanHii-7092972_hq.mp3?st=1q1X9mtcvIT-pLD09E8NJA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Tan Ver</p>
                    <p class="track-album">Tuấn Hii</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/NhinEmMaXemLookAtMeNow-PhungKhanhLinh-7080589_hq.mp3?st=E627MVqJbuEaVzQTGAGgQQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Nhìn Em Mà Xem (Look At Me Now)</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/Voi-PhanNgocLuan-7092998_hq.mp3?st=Tf27_yR5s-4eDgsUzRG6wA&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Vội</p>
                    <p class="track-album">Phan Ngọc Luân</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/LatMat-UngHoangPhuc-7093256_hq.mp3?st=hI6fIYkcC0lxHanOo7m9gg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Lật Mặt</p>
                    <p class="track-album">Ưng Hoàng Phúc</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/CauHuaChuaVenTron-PhatHuyT4-7093319_hq.mp3?st=oopUXXBY3T-dcZz3d0foTw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Câu Hứa Chưa Vẹn Tròn</p>
                    <p class="track-album">Phát Huy T4</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/EmCuaNgayHomQuaYesterme-PhungKhanhLinh-7080586_hq.mp3?st=HiZ9Shn74xjvUBXNYNgXHw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Em Của Ngày Hôm Qua (Yesterme)</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/DongHoCat-PhonMiCat-7094258_hq.mp3?st=GVN33gsaFiOzqRt4j5jJ0w&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Đồng Hồ Cát</p>
                    <p class="track-album">Phởn,Mi Cat</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/Unv_Audio200/CoDonSomToi-PhungKhanhLinh-7080587_hq.mp3?st=YBV4sFIxr5mIsUyPTgiXKQ&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Cô Đơn Sớm Tối</p>
                    <p class="track-album">Phùng Khánh Linh</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/AiNo1-MasewKhoiVu-7078913_hq.mp3?st=xz-FLbkWkrTuJQZEk0CtWg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Ái Nộ</p>
                    <p class="track-album">Masew,Khôi Vũ</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1021/DiuDangEmDen-ERIKNinjaZ-7078877_hq.mp3?st=NImNdaTEXLCbMnXQC1n9vg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Dịu Dàng Em Đến</p>
                    <p class="track-album">ERIK,NinjaZ</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/DuChoCaHaiDaSai-NonHanTa-7097085_hq.mp3?st=u4OfIMI-hzuQ2rr7BSkQfw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Dù Cho Cả Hai Đã Sai</p>
                    <p class="track-album">NonHanTa</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1022/QuenNhauDeTotHon-KaleeHoangThanhTar-7098487_hq.mp3?st=qn8bj4P_rUrRTwhADq4Bcg&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Quên Nhau Để Tốt Hơn</p>
                    <p class="track-album">Kalee Hoàng,Thành Tar</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1020/TrongNhaNgayMua-TrungQuanIdolNegav-7069666_hq.mp3?st=nt3yumOHpUl6892AFsaRpw&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">trong nhà ngày mưa</p>
                    <p class="track-album">Trung Quân Idol,Negav</p>
                  </div>
                </a>
                 </li>
                <li>
                 <a href="#" data-src="https://aredir.nixcdn.com/NhacCuaTui1020/TruongThanh2-DeeA-7076716_hq.mp3?st=quj7DC8az4IlrF_YgI4E8A&amp;e=1637823355">
                  <div class="track-info">
                    <p class="track-title">Trưởng Thành 2</p>
                    <p class="track-album">Dee.A</p>
                  </div>
                </a>
                 </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STAY IN TOUCH -->
  <section class="section stay-in-touch inverse-color parallax-section"  id="anchor02">
    <div class="col-xs-12 col-md-12 biography-image" style="background: url('../../img.solmusic.vn/xmusicstation/home/images/bar_c.png') no-repeat center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="voffset190"></div>
          <p class="titulo">Our's diverse Copyright Music Data is always updated</p>
          <div class="voffset20"></div>
          <p class="cousine subtitulo">CloudMusic is a solution to use copyrighted music with a high-quality, always-updated music store for business models such as Retail & Supermarkets, Restaurant Chains, Cafe Chains, Bars & Pubs, Spas & Gyms , Workspaces, as well as for other personal uses.</p>
          <div class="voffset30"></div>
          
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <input class="btn square stay-in-touch-submit createpl" type="submit" name="button" value="Explore CloudMusic's Playlist">
              </div>
            </div>
         
          <div class="voffset190"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- DISCOGRAPHY -->
  <section class="section discography" id="anchor03">
    <div id="discography"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="voffset70"></div>
          <div class="title-wrapper">
            <h2 class="title">Playlist of the Month</h2>
          </div>
          <div class="voffset80"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="carousel-discography js-flickity" data-flickity-options="{
            &quot;cellAlign&quot;: &quot;center&quot;, &quot;wrapAround&quot;: false,
            &quot;contain&quot;: false, &quot;prevNextButtons&quot;: false,
            &quot;imagesLoaded&quot;: true
          }">
          <!-- col-xlg-3 -->
            <li class="gallery-cell col-xs-12">
              <div class="row">                <div class="col-xs-12 col-md-6 item-disc">

                  <div class="info-album">
                    <div class="cover open-disc" data-url="/album/detail?id=377859" data-album="">
                    <img src="../../img.solmusic.vn/xmusicstation/album/V-Pop Acoustic in October, 2021.png" alt="">
                      <div class="rollover">
                      <a href="vpop_accoustic.php"><i class="plus"></i></a>
                      </div>
                    </div>
                    <a href="vpop_accoustic.php"><p class="album">V-Pop Acoustic in May, 2022</p></a>
                    <p class="artist"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6 item-disc">
                  <div class="info-album">
                    <div class="cover open-disc" data-url="/album/detail?id=377760" data-album="">
                      <img src="../../img.solmusic.vn/xmusicstation/album/USUK Acoustic in October, 2021.png" alt="">
                      <div class="rollover">
                      <a href="usuk_accoustic.php"><i class="plus"></i></a>
                      </div>
                    </div>
                    <a href="usuk_accoustic.php"><p class="album">USUK Acoustic in May, 2022</p></a>
                    <p class="artist"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6 item-disc">
                  <div class="info-album">
                    <div class="cover open-disc" data-url="/album/detail?id=377759" data-album="">
                      <img src="../../img.solmusic.vn/xmusicstation/album/USUK in October, 2021.png" alt="">
                      <div class="rollover">
                      <a href="usuk.php"><i class="plus"></i></a>
                      </div>
                    </div>
                    <a href="usuk.php"><p class="album">USUK in May, 2022</p></a>
                    <p class="artist"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6 item-disc">
                  <div class="info-album">
                    <div class="cover open-disc" data-url="/album/detail?id=377858" data-album="">
                      <img src="../../img.solmusic.vn/xmusicstation/album/V-Pop In October, 2021.png" alt="">
                      <div class="rollover">
                      <a href="vpop.php"><i class="plus"></i></a>
                      </div>
                    </div>
                    <a href="vpop.php"><p class="album">V-Pop in May, 2022</p></a>
                    <p class="artist"></p>
                  </div>
                </div>
              </div>
            </li>
            
        </ul>
        <div class="voffset100"></div>
      </div>
    </div>
  </div>
  <!-- DETAILS DISCO -->
  <div id="project-show"></div>
  <div class="section player-album project-window">
    <div class="project-content"></div><!-- AJAX Dinamic Content -->
  </div>
</section>

<!-- BIOGRAPHY -->
<section class="section container-fluid full-width biography" id="anchor04">
  <div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-1 biography-description">
      <h3 class="title inverse">Manage synchronized music playback for commercial use</h3>
      <div class="voffset40"></div>
      <p class="cousine">CloudMusic's management tool allows you to create playlists, select music genres, and moods. Allows scheduling, arranging music playback time & advertising uniformly or separately between branches, thereby helping to increase brand awareness. Centralized management system, user-friendly interface, simple operation, offline music playback even without internet.</p>
      <div class="voffset40"></div>
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <input class="btn square stay-in-touch-submit createpl" type="submit" name="button" value="Explore CloudMusic's Playlist">
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 col-sm-offset-1 biography-image" style="background: url('../../img.solmusic.vn/xmusicstation/home/images/musicmanage.jpg') no-repeat center">
    </div>
  </div>
</div>
</section>

<!-- NEWS -->
<div class="section blog list-posts" id="anchor07">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="voffset70"></div>
        <div class="title-wrapper">
          <h2 class="title">WHY YOU SHOULD USE CLOUDMUSIC</h2>
        </div>
        <div class="voffset80"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <article class="post-item">
          <div class="row">
            <div class="col-sm-6">
              <div class="photo-post" id="image-post1" style="background: url('../../img.solmusic.vn/xmusicstation/home/images/flexibleplaylist.jpg') no-repeat center"></div>
            </div>
            <div class="col-sm-6">
              <div class="voffset30"></div>
              <h3 class="title post">Flexible Playlist arrangement by genre and mood for brands</h3>
              <p>From relaxing mornings, to energetic afternoons and vibrant evenings. CloudMusic's automated management system plays by genre and mood to your customers. The system changes songs according to the time of day, energy, rhythm, emotion. The professional editorial team always supports appropriate playlists for each brand and business model.</p>
              <span class="btn rounded close-new">view less</span>
              <a href="javascript:void(0)" class="btn square inverse createpl" >Explore CloudMusic's Playlist</a>
              <section class="section news-window">
                <div class="news-content"></div><!-- AJAX Dinamic Content -->
              </section>
            </div>
          </div>
        </article>
        <article class="post-item">
          <div class="row">
            <div class="col-sm-6">
              <div class="photo-post" style="background: url('../../img.solmusic.vn/xmusicstation/home/images/copyrightmusic.jpg') no-repeat center" id="image-post2"></div>
            </div>
            <div class="col-sm-6">
              <div class="voffset30"></div>
              <h3 class="title post">Legal Use of Copyright Music</h3>
              <p>Music streaming services such as Spotify, Pandora, Deezer, Amazon Music, or Apple Music are only licensed to individual users for use at home or in the car. CLoudMusic is a licensed music streaming service for commercial use in public spaces such as Restaurants, Cafe chains, Retail & Supermarkets, Spas & Gyms, Bars & Pubs and Workspaces . In addition, CloudMusic also licenses the personal use of the song for personal use.</p>
              <span class="btn rounded close-new">view less</span>
              <a href="javascript:void(0)" class="btn square inverse createpl" >Explore CloudMusic's Playlist</a>
              <section class="section news-window">
                <div class="news-content"></div><!-- AJAX Dinamic Content -->
              </section>
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="voffset40"></div>
  </div>
</div>

<!-- GALLERY -->
<section class="section last-media" id="anchor06">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="voffset90"></div>
        <div class="title-wrapper">
          <h2 class="title">SUITABLE FOR MANY BUSINESS TYPES</h2>
        </div>
        <div class="voffset50"></div>
      </div>
    </div>
    <!-- gallery -->
    <div class="row">
      <div class="col-md-12">
        <div class="voffset50"></div>
        <div class="thumbnails">
          <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/barber.png" alt="">
          </div>
          <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/bars_pubs.png" alt="">
          </div>
          <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/coffeshops.png" alt="">
          </div>
          <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/restaurent_bistro.png" alt="">
          </div>
          <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/cinema.png" alt="">
          </div>
         <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/gyms.png" alt="">
          </div>
         <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/retail_market.png" alt="">
            </div>
            <div class="thumbnail image">
              <img src="../../img.solmusic.vn/xmusicstation/home/images/personaluse.png" alt="">
          </div>
        </div>
        <div class="voffset50"></div>
      </div>
    </div>
  </div>
</section>
<section class="section inverse-color contact" id="anchor08">
  <div class="container">
    
        <div class="social">
        <div class="items">
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_1.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_2.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_3.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_4.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_5.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_6.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_7.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_8.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_9.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_10.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_11.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_12.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_13.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_14.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_15.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_16.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_17.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_18.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_19.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_20.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_21.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_22.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_23.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_24.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_25.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_26.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_27.png"> </div>
             </div>
             <div class="card">
                 <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_28.png"> </div>
             </div>
         </div>
    </div>

    <div class="voffset80"></div>
    
  </div>
</section>
<form id="form_popup_contact" method="post" role="form">
        <div id="box_popup_contact">
            <div class="box_contact">
                <div class="bg">
                    
                </div>
                <div class="info_contact">
                    <span class="close"></span>
                    <div class="head">Contact Us</div>
                    <div class="contact_form">
                        <form id="contact-popup">
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input class="required input"  aria-required="true" type="text" id="fullname" name="fullname" placeholder="Your Name">
                            </div>
                            <div class="group">
                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input class="input" type="text" name="email" placeholder="Email">
                        </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input class="input" type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fas fa-user-edit" aria-hidden="true"></i></span>
                                <textarea class="textarea" name="message" placeholder="What You Looking For?"></textarea>
                            </div>
                          
                            <div class="group">
                                <input class="btn_contact" id="contact-popup" type="submit" name="submit" value="Submit" onclick="myFunction()"></input>
                                  <script>
                                  function myFunction() {
                                    alert("Thank you for contacting us! We will reply soon!");
                                  }
                                  </script>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>
<form method="post" action="../auth/post_register.php">
          <div id="box_popup_regist">
              <div class="box_regist">
                  <div class="bg">
                      <div class="text">Free to use<br><br>UP TO 7 DAYS</div>
                  </div>
                  <div class="info_regist">
                      <span class="close" onclick="document.location='v1.php'"></span>
                      <div class="head">Sign up for a trial</div>
                      <div class="children">Use copyrighted music the right way</div>
                      <div class="regist_form">
                          <form id="register-popup">
                              <div class="group">
                                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                  <input class="required input"  aria-required="true" type="text" id="name" name="name" placeholder="Name" required>
                              </div>
                              <div class="group"> 
                                  <span class="input-group-addon"><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                                  <select name="gender" id="select" class="required selectpicker">
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                  </select>
                              </div>
                              <div class="group">
                                  <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                  <input class="input" type="text" name="email" placeholder="Email" required>
                              </div>
                              <div class="group">
                                  <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                  <input class="input" type="tel" name="phone" pattern="[0-9]{10}" placeholder="Phone Number" required>
                              </div>
                              <div class="group">
                                  <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                  <input class="input" name="password" type="password" placeholder="Password" id='pass' required>                    
                              </div>
                              <div class="group">
                                  <input class="btn_regist" id="dangky-popup" type="submit" name="submit" value="Sign Up">
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </form>
<!-- FOOTER -->
<footer>
  <div class="container">
    <p class="copy"><i class="far fa-copyright"></i> 2022. CloudMusic</p><br>
    <p class="copy"><i class="fas fa-laptop-code"></i> Sponsor by CISH</p>
    
  </div>
</footer>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
        <script src="../assets/js/vendor/jquery.js"></script>
        <script src="../assets/js/vendor/jquery.superslides.min.js"></script>
        <script src="../assets/js/vendor/flickity.pkgd.js"></script>
        <script src="../assets/js/vendor/audio.min.js"></script>
        <script src="../assets/js/vendor/twitterFetcher_min.js"></script>
        <script src="../assets/js/vendor/isotope.pkgd.min.js"></script>
        <script src="../assets/js/vendor/jquery.swipebox.min.js"></script>
        <script src="../assets/js/vendor/TimeCircles.js"></script>
        <script src="../assets/js/vendor/owl.carousel.min.js"></script>
        <script src="../assets/js/vendor/jquery.parallax.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.js"></script>
        <script src="../assets/js/vendor/jquery.validate.js" type="text/javascript" ></script>
        <script src="../assets/js/vendor/jquery-confirm.js" type="text/javascript" ></script>
        <script src="../assets/js/plugins/slick.min.js"></script>
        <script src="../assets/js/exec/home_discography.js"></script>
        <script src="../assets/js/exec/home_news.js"></script>
        <script src="../assets/js/exec/home_main.js"></script>

        <!-- Intro Slider -->
        <script src="../assets/js/exec/home-intro-slider.js"></script>
        <!-- Countdown Next Show -->
        <script src="../assets/js/vendor/countdown.js"></script>
        <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments);
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-116469076-1', 'auto');
        ga('send', 'pageview');
        </script>
        
    </body>

</html>
