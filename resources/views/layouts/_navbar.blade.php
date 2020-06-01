
<!-- Navigation Bar -->
<!-- <div class="w3-bar w3-teal w3-large"> <a href="about" class="w3-bar-item
w3-button w3-teal w3-mobile"><i class="fas fa-mountain"></i>MonFin</a> <a
href="reserve" class="w3-bar-item w3-button w3-mobile">จองที่พัก</a> <a
href="attractions" class="w3-bar-item w3-button w3-mobile">สถานที่ท่องเที่ยว</a>
<a href="foods" class="w3-bar-item w3-button w3-mobile">อาหาร</a> <a
href="contact-us" class="w3-bar-item w3-button w3-mobile"> ติดต่อเรา</a> <a
href="posts" class="w3-bar-item w3-button w3-mobile"> รีวิว</a> <a href="map"
class="w3-bar-item w3-button w3-mobile"><i class="fas fa-map-marker-alt"></i>
แผนที่</a> <a href="#" class="w3-bar-item w3-button w3-right w3-teal
w3-mobile">สมัครสมาชิก</a> <a href="#" class="w3-bar-item w3-button w3-right
w3-mobile">เข้าสู่ระบบ</a> </div> -->

<!-- Sidebar/menu -->

<nav
    class="w3-sidebar  w3-bar-block w3-teal w3-animate-right w3-top w3-text-light-grey w3-large"
    style="z-index:3;width:250px;font-weight:bold;display:none;right:0;"
    id="mySidebar">
    <div class="w3-container w3-light-grey ">
        <br>
           @auth
            <a href="{{ route('users.show', ['user' => Auth::user()])}}">
                <img
                    src=" {{Auth::user()->image}}"
                    style="width:45%;"
                    alt="Avatar"
                    class="w3-container w3-circle  ">
                    {{ Auth::user()->username }}
                </a>
                @endauth

                @guest
                <img
                    src=" {{ url('/') }}/storage/images/icons/avatar1.jpg"
                    style="width:35%;"
                    alt="Avatar"
                    class="w3-container w3-circle ">

                    <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">สมัครสมาชิก </a>

                          @endif

                 @endguest

                @auth
                    <a
                        class="w3-right w3-text-red"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    @endauth
                    <form
                        id="logout-form"
                        action="{{ route('logout') }}"
                        method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                   </div>
                        <a
                            href="{{ route('about')}}"
                            class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'about' ) btn active w3-light-grey  @endif">
                            <i class="fas fa-mountain"></i>หน้าหลัก</a>
                       <!--  @auth
                            @if(Auth::user()->isUser())
                            <a
                                href="{{ route('rooms.index')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16">จองที่พัก</a>
                            @endif
                        @endauth -->

                         @auth
                            @if(Auth::user()->isAdmin())
                            <a
                                href="{{ route('users.index')}}"
                                onclick="w3_close()"
                                class="  w3-bar-item w3-center w3-button   w3-padding-16  @if(Route::currentRouteName() === 'users.index' ) btn active w3-light-grey @endif"   href="{{ route('users.index')}}">สมาชิกทั้งหมด</a>
                            @endif
                        @endauth

                         @auth
                            @if(Auth::user()->isAdmin())
                            <a
                                href="{{ route('details.index')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'details.index' ) btn active w3-light-grey @endif" >ข้อมูลการจองทั้งหมด</a>
                            @endif
                        @endauth

                        @auth
                            @if(Auth::user()->isAdmin())
                            <a
                                href="{{ route('payments.index')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'payments.index' ) btn active w3-light-grey @endif">ข้อมูลการชำระเงินทั้งหมด</a>
                            @endif
                        @endauth
                        
                        @auth
                            @if(Auth::user()->isUser())
                        <a
                                href="{{ route('tasks.index')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'tasks.index' ) btn active w3-light-grey @endif">ตรวจสอบห้องพัก</a>
                                @endif
                        @endauth

                        @auth
                            @if(Auth::user()->isUser())
                            <a
                                href="{{ route('details.show', ['detail' => Auth::user()])}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'details.show' ) btn active w3-light-grey @endif">ข้อมูลการจอง</a>
                            @endif
                        @endauth

                        @auth
                            @if(Auth::user()->isUser())
                            <a
                                href="{{ route('payments.show', ['payment' => Auth::user()])}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16  @if(Route::currentRouteName() === 'payments.show' ) btn active w3-light-grey @endif">ข้อมูลการชำระเงิน</a>
                            @endif
                        @endauth

                        @auth
                            @if(Auth::user()->isUser())
                            <a
                                href="{{ route('attractions')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'attractions' ) btn active w3-light-grey @endif">สถานที่ท่องเที่ยว</a>
                            @endif
                        @endauth

                        @guest
                            <a
                                href="{{ route('attractions')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'attractions' ) btn active w3-light-grey @endif">สถานที่ท่องเที่ยว</a>
                        @endguest

                        @auth
                            @if(Auth::user()->isUser())
                            <a
                                href="{{ route('foods')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'foods' ) btn active w3-light-grey @endif">อาหาร</a>
                            @endif
                        @endauth



                        @guest
                            <a
                                href="{{ route('foods')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'foods' ) btn active w3-light-grey @endif">อาหาร</a>
                        @endguest

                        @auth
                            @if(Auth::user()->isUser())
                            <a
                                href="{{ route('contact-us')}}"
                                onclick="w3_close()"
                                class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'contact-us' ) btn active w3-light-grey @endif">ติดต่อเรา</a>
                            @endif
                        @endauth

                        @guest
                        <a
                            href="{{ route('contact-us')}}"
                            onclick="w3_close()"
                            class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'contact-us' ) btn active w3-light-grey @endif">ติดต่อเรา</a>
                        @endguest

                        <a
                            href="{{ route('posts.index')}}"
                            onclick="w3_close()"
                            class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'posts.index' ) btn active w3-light-grey @endif">
                            รีวิว</a>

                        @auth
                        @if(Auth::user()->isUser())
                        <a
                            href="{{ route('map')}}"
                            onclick="w3_close()"
                            class="w3-bar-item w3-button w3-center w3-padding-16  @if(Route::currentRouteName() === 'map' ) btn active w3-light-grey @endif">
                            แผนที่</a>
                        @endif
                        @endauth

                        @guest
                        <a
                            href="{{ route('map')}}"
                            onclick="w3_close()"
                            class="w3-bar-item w3-button w3-center w3-padding-16 @if(Route::currentRouteName() === 'map' ) btn active w3-light-grey @endif">
                            แผนที่</a>
                        @endguest


                        <a
                            href="javascript:void()"
                            onclick="w3_close()"
                            class="w3-bar-item w3-button w3-center w3-padding-32">ปิดเมนู</a>
                    </nav>

                    <!-- Top menu on small screens -->
                    <div class="w3-bar  w3-teal w3-xxlarge">
                        <span href="about" class="w3-left w3-padding">
                            <i class="fas fa-mountain"></i>Monfin</span>
                        <span
                            href="javascript:void(0)"
                            class="w3-right w3-button w3-teal"
                            onclick="w3_open()">☰</span>
                    </div>

                    <!-- Overlay effect when opening sidebar on small screens -->
                    <div
                        class="w3-overlay w3-animate-opacity"
                        onclick="w3_close()"
                        style="cursor:pointer"
                        title="close side menu"
                        id="myOverlay"></div>


