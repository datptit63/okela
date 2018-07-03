<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APKA - tìm xe đưa đón sân bay giá tốt</title>
    <?$APPLICATION->ShowHead();?>

    <meta id="metaDes" name="description" content="Với hơn 4000 + xe, APKA đấu giá tìm xe sân bay giá tốt nhất cho bạn. Nhiều quà tặng. Tặng Voucher 150.000 vnđ và thêm 10.000 + mỗi khi giới thiệu thêm bạn bè." >

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/skins/skin-blue.min.css">
    <!--    date time-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/select2/select2.min.css">
    <!-- DataTables -->

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.responsive.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Owl Carousel 2 -->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">-->

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/owl-carousel/owl.theme.css">

    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/custom.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBLjRETbTPbRpdbMXFLKTlK_PHWC4T6DBA"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link rel="canonical" href="http://apka.vn/" >
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120230851-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120230851-1');
    </script>

</head>

<body class="hold-transition skin-blue  layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <img   style="height: 70px" src="<?=SITE_TEMPLATE_PATH?>/images/logo-apka.png" alt="apka.vn" >
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/"><i class="fa fa-home"></i>&nbsp;&nbsp; Trang chủ</a></li>
                        <li><a href="/dat-xe-2/"><i class="fa fa-search"></i>&nbsp;&nbsp; Tìm xe</a></li>
                        <li><a href="/dat-xe/"><i class="fa fa-search"></i>&nbsp;&nbsp; Săn vé 0 đồng</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;
                                <?if($GLOBALS["USER"]->GetID()>0){?><?=$GLOBALS["USER"]->GetFullName()?><?}else{?>Tài khoản<?}?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?if($GLOBALS["USER"]->GetID()>0){?>
                                    <li><a href="/tai-khoan/quan-ly-chuyen/"><i class="fa fa-plus"></i>Các xe đã đặt</a></li>
                                    <li><a href="/?logout=yes"><i class="fa fa-plus"></i>Đăng xuất</a></li>
                                <?}else{?>
                                <li><a href="/tai-khoan/register.php"><i class="fa fa-plus"></i>Đăng ký</a></li>
                                <li><a href="/tai-khoan/"><i class="fa fa-plus"></i>Đăng nhập</a></li>
                                <?}?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-language	"></i>&nbsp;Ngôn ngữ<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-plus"></i>Tiếng Việt </a></li>
                                <li><a href="#"><i class="fa fa-plus"></i>Tiếng Anh </a> </li>
                                <li><a href="#"><i class="fa fa-plus"></i>Tiếng Hàn </a> </li>
                            </ul>
                        </li>
                    </ul>


                </div>
<!--                <div class="collapse navbar-collapse pull-right">-->
<!--                    <p for="sel1">Ngon</p>-->
<!--                    <select class="form-control" id="sel1">-->
<!--                        <option>1</option>-->
<!--                        <option>2</option>-->
<!--                        <option>3</option>-->
<!--                        <option>4</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--                -->
                <!-- /.navbar-collapse -->

                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
