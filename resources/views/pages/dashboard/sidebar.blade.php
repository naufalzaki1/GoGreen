<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="{{asset('assets/images/logo.png')}}" width="120" height="120">
        <h5 style="margin-top:10px;">Hello, {{ Auth::user( )->name }}</h5>
    </div>
    <a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a>
    <a href="{{route('dashboard.users')}}"><i class="fa fa-users"></i> Users</a>
    <a href="{{route('dashboard.donations')}}"><i class="fa fa-heart"></i> Donation</a>
    <a href="{{route('dashboard.galleries')}}"><i class="fa fa-paint-brush"></i> Gallery</a>
    <a href="{{route('dashboard.blogs')}}"><i class="fa-solid fa-blog"></i> Blog</a>
    
</div>
