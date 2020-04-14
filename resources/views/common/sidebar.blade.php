<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a href="{{action('AdminController@index')}}"><i class="fa fa-home"></i> LiveStream của tôi</a>
      </li>
      <li><a><i class="fa fa-play"></i></i> Livestream nguồn video <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{action('LivestreamHocmaiVideoController@create')}}">Cấu hình livestream từ HOCMAI</a></li>
          <li><a href="{{action('LivestreamAnotherVideoController@create')}}">Cấu hình livestream từ nguồn khác</a></li>
          <li><a href="{{action('AnotherVideoController@index')}}">Cài đặt nguồn video</a></li>
          <li><a href="{{action('HocMaiVideoController@index')}}">Cài đặt video học mãi</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-video-camera"></i> Camera Livestream<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-cog"></i> Quản lý thông tin chung <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          @if(checkUserRole() == ADMIN)
          <li><a href="{{action('UserController@index')}}">Quản lý người dùng</a></li>
          <li><a href="{{action('SchoolBlockController@index')}}">Quản lý Kênh</a></li>
          <li><a href="{{action('SubjectController@index')}}">Quản lý Môn</a></li>
          <li><a href="{{action('ClassController@index')}}">Quản lý lớp</a></li>
          @endif
          <li><a href="{{action('TeacherController@index')}}">Quản lý Giáo viên</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>