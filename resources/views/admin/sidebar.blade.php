

 <!-- Sidebar  -->
 <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="{{ route('dashboard') }}"><img class="logo_icon img-responsive" src="/admin/images/logo/logo_icon.png" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="/admin/images/layout_img/user_img.jpg" alt="#" /></div>
             <div class="user_info">
                <h6>{{ auth()->user()->name }}</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>General</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <a href="{{ route('dashboard') }}" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>

          </li>
          <li><a href="{{ Route('admin.card.index') }}"><i class="fa fa-credit-card orange_color"></i> <span>Cards</span></a></li>
          <li><a href="{{ Route('admin.promotion.index') }}"><i class="fa fa-bar-chart-o orange_color"></i> <span>Promotions</span></a></li>
          <li><a href="{{ Route('admin.about.index') }}"><i class="fa fa-graduation-cap orange_color"></i> <span>About</span></a></li>
          <li><a href="{{ Route('admin.social.index') }}"><i class="fa fa-paper-plane orange_color"></i> <span>Socials</span></a></li>
       </ul>
    </div>
 </nav>

 </div>

