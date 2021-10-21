<?php 
  $userInfo = getInforUser();
?>
<div class="top_nav">
  <div class="nav_menu">
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
      <ul class=" navbar-right">
      <div class="dropdown" style="float:right;margin-right:25px">
        <button class="dropbtn"> 
          <img src="{{$userInfo->avatar}}" height="50px" width="50px">
          </button>
          <div class="dropdown-content" style="left:0;">
            <a href="{{ action('ProfileController@index')}}">Thông tin cá nhân</a>
            <a href="{{action('AdminController@getLogout')}}">Đăng xuất</a>
          </div>
      </div>
        <!-- <li class="nav-item dropdown" style="padding-left: 15px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="{{$userInfo->avatar}}" alt="avatar">
           
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
            
          </div>
        </li> -->
      </ul>
    </nav>
  </div>
</div>
