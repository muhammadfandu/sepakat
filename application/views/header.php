<head>
    <title>Sepakat</title>

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/style-extra.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/summernote.css"); ?>"/>

<link rel="" href="<?php echo base_url();?>"/>

<style>
    .main-banner{
        background-image: url("<?php echo base_url("assets/images/mainBanner.jpg"); ?>");
        height: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main-banner:before{
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.6);
        z-index: 1;
    }
    .main-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
    .small-banner{
        background-image: url("<?php echo base_url("assets/images/mainBanner.jpg"); ?>");
        height: 50%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .small-banner:before{
        content: '';
        width: 100%;
        height: 50%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.6);
        z-index: 1;
    }
    .small-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
    .sub-banner{
        background-image: url("<?php echo base_url("assets/images/mainBanner.jpg"); ?>");
        height: 80%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .sub-banner:before{
        content: '';
        width: 100%;
        height: 80%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.6);
        z-index: 1;
    }
    .sub-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
    .solid-banner{
        background-color: #51c4de;
        height: 80%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .solid-banner:before{
        content: '';
        width: 100%;
        height: 80%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.2);
        z-index: 1;
    }
    .solid-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
    div.upload {
        width: 157px;
        height: 57px;
        background: url(https://lh6.googleusercontent.com/-dqTIJRTqEAQ/UJaofTQm3hI/AAAAAAAABHo/w7ruR1SOIsA/s157/upload.png);
        overflow: hidden;
    }

    div.upload input {
        display: block !important;
        width: 157px !important;
        height: 57px !important;
        opacity: 0 !important;
        overflow: hidden !important;
    }
</style>
</head>

<body>

<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<nav id="navigate"class="nav navbar navbar-default navbar-fixed-top">
  <div class="container" style="padding:0;">
    <div class="pull-left">
      <a class="navbar-brand" href="#"><i class="fa fa-fw fa-2x fa-handshake-o"></i></a>
    </div>
    <div class="pull-right">
      <a class="navbar-brand" onclick="openNav()"><i class="fa fa-fw fa-2x fa-reorder"></i></a>
    </div>
    <div class="nav-menu navbar-collapse collapse">
      <ul class="nav" style="display:block;text-align:center;">
        <li class="active"><a href="<?php echo base_url();?>home">Beranda</a></li>
        <li class=""><a href="<?php echo base_url();?>hub">Hub</a></li>
        <li class=""><a href="<?php echo base_url();?>perusahaan">Cari Perusahaan</a></li>
        <li class=""><a href="<?php echo base_url();?>penyedia">Cari Penyedia</a></li>
        <li class=""><a href="<?php echo base_url();?>login">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="<?php echo base_url();?>home">Beranda</a>
 <a href="<?php echo base_url();?>hub">Hub</a>
 <a href="<?php echo base_url();?>perusahaan">Cari Perusahaan</a>
 <a href="<?php echo base_url();?>penyedia">Cari Penyedia</a>
 <a>Login</a>
</div>
