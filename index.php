<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
    <link rel="stylesheet" href="assets/styles.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar" id="sidebar">
    <ul class="nav-links">
      <div class="box-profile">
        <img src="assets/img/1.png" alt="">
        <h3>Nurafiif Almas</h3>
        <p>Nurafiif Almas</p>
      </div>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Realtime</span>
        </a>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Data User</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a href="#">User Aktif</a></li>
          <li><a href="#">User Non Aktif</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Data Pengolahan</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a href="#">Pembangkit</a></li>
          <li><a href="#">Tegangan</a></li>
          <li><a href="#">Forcasting</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Data Operasi</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Documentation</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-conversation' ></i>
          <span class="link_name">Forum</span>
        </a>
      </li>
      <hr>
      <br>
      <br>
      <br>
      <li>
        <a href="#">
          <i class='bx bx-log-out' ></i>
          <span class="link_name">Logout</span>
        </a>
      </li>
    </ul>
  </div>
  
  <div class="nav_responsive">
    <a href="javascript:void(0);" class="icon" onclick="sidebar_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  
  <div class="main">
    <div class="header">
      <a>Realtime</a>
    </div>
  </div>

</body>
</html>

<script src="assets/index.js"></script>