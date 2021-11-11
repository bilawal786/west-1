@extends('layouts.front')
@section('content')
    <!-- Swiper-->
    <div class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            <div data-slide-bg="{{asset('front/images/slide-1.jpg')}}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div data-caption-animate="fadeInUp" class="container text-left">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                                <h1>Serenity is <br class="visible-lg"> inside you</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-slide-bg="{{asset('front/images/slide-2.jpg')}}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div data-caption-animate="fadeInUp" class="container text-left">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                                <h1>Inspiration for <br class="visible-lg"> joyful living</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-slide-bg="{{asset('front/images/slide-3.jpg')}}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div class="container text-left">
                        <div class="row">
                            <div data-caption-animate="fadeInUp" class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                                <h1>Flexibility is <br class="visible-lg"> a second power</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
    </div>
    </header>

    <!-- Page Content-->
    <main class="page-content">
        <!--section 1-->
        <div class="range range-no-gutter">
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <div class="banner-block border-right"><span class="icon icon-primary icon-sm fl-bigmug-line-like51"></span>
                    <p class="h5 text-regular">NOS OFFRES</p>
                </div>
            </div>
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <div class="banner-block border-right"><span class="icon icon-primary icon-sm fl-bigmug-line-nine16"></span>
                    <p class="h5 text-regular">A PROPOS<br class="visible-md"></p>
                </div>
            </div>
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <div class="banner-block border-right"><span class="icon icon-primary icon-sm fl-bigmug-line-foggy3"></span>
                    <p class="h5 text-regular">BOUTIQUE <br class="visible-md"></p>
                </div>
            </div>
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <div class="banner-block"><span class="icon icon-primary icon-sm fl-bigmug-line-notification4"></span>
                    <p class="h5 text-regular">BLOG</p>
                </div>
            </div>
        </div>
     <section class="section-55 section-sm-top-115 section-sm-bottom-0 text-center">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <img style="width: 100%" src="{{asset('front/01.png')}}" alt="">
                 </div>
             </div>
         </div>
     </section>


        <!--section 5-->
        <section class="section-55 section-sm-top-115 section-sm-bottom-125 text-center bg-index-8 bg-overlay">
            <div class="container z-index">
                <div class="heading-variant-3">
                    <p><span class="icon icon-sm icon-dark fl-bigmug-line-notebook41"></span></p>
                    <h1>Classes timetable</h1>
                </div>
                <ul class="nav-calendar nav-calendar-mod-1 offset-top-45">
                    <li><span data-type="showAll" class="active">all events</span></li>
                    <li><span data-type="hatha-yoga">hatha yoga</span></li>
                    <li><span data-type="yoga-dance">yoga dance</span></li>
                    <li><span data-type="ashtanga-yoga">ashtanga yoga</span></li>
                    <li><span data-type="kundalini-yoga">kundalini yoga</span></li>
                    <li><span data-type="morning-flow">morning flow</span></li>
                </ul>
                <div class="calendar-responsive-mod-1 offset-top-55">
                    <table class="calendar-variant-2">
                        <thead>
                        <tr>
                            <th>
                                <div class="bg-white"></div>
                            </th>
                            <th>
                                <div class="bg-white">Monday</div>
                            </th>
                            <th>
                                <div class="bg-white">Tuesday</div>
                            </th>
                            <th>
                                <div class="bg-white">Wednesday</div>
                            </th>
                            <th>
                                <div class="bg-white">Thursday</div>
                            </th>
                            <th>
                                <div class="bg-white">Friday</div>
                            </th>
                            <th>
                                <div class="bg-white">Saturday</div>
                            </th>
                            <th>
                                <div class="bg-white">Sunday</div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="h6 text-base">09.00</span></td>
                            <td>
                                <div data-description="Advanced sequence" class="morning-flow fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Morning flow</div>
                                        <div class="disc text-regular">Advanced sequence</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Basic kundalini" class="kundalini-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Kundalini yoga</div>
                                        <div class="disc text-regular">Basic kundalini</div>
                                        <div class="teacher">Grace Dian</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Weight loss" class="ashtanga-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Ashtanga yoga</div>
                                        <div class="disc text-regular">Weight loss</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Advanced sequence" class="morning-flow fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Morning flow</div>
                                        <div class="disc text-regular">Advanced sequence</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Weight loss" class="ashtanga-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Ashtanga yoga</div>
                                        <div class="disc text-regular">Weight loss</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Advanced sequence" class="morning-flow fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Morning flow</div>
                                        <div class="disc text-regular">Advanced sequence</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Basic kundalini" class="kundalini-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">9:00 - 10:00</div>
                                        <div class="fc-event-title">Kundalini yoga</div>
                                        <div class="disc text-regular">Basic kundalini</div>
                                        <div class="teacher">Grace Dian</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="bg-white">
                                    <div class="fc-event-inner"><span class="h6 text-base">10.00</span></div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Weight loss" class="ashtanga-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">10.00-11.00</div>
                                        <div class="fc-event-title">Ashtanga yoga</div>
                                        <div class="disc text-regular">Weight loss</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Cardio fit" class="yoga-dance fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">10.00-11.00</div>
                                        <div class="fc-event-title">Yoga dance</div>
                                        <div class="disc text-regular">Cardio fit</div>
                                        <div class="teacher">Daniel Brooks</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Cardio fit" class="yoga-dance fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">10.00-11.00</div>
                                        <div class="fc-event-title">Yoga dance</div>
                                        <div class="disc text-regular">Cardio fit</div>
                                        <div class="teacher">Daniel Brooks</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Cardio fit" class="yoga-dance fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">10.00-11.00</div>
                                        <div class="fc-event-title">Yoga dance</div>
                                        <div class="disc text-regular">Cardio fit</div>
                                        <div class="teacher">Daniel Brooks</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="h6 text-base">11.00</span></td>
                            <td>
                                <div data-description="Weekend class" class="hatha-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">11.00-12.00</div>
                                        <div class="fc-event-title">Hatha yoga</div>
                                        <div class="disc text-regular">Weekend class</div>
                                        <div class="teacher">Mary Sheldon</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Weekend class" class="hatha-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">11.00-12.00</div>
                                        <div class="fc-event-title">Hatha yoga</div>
                                        <div class="disc text-regular">Weekend class</div>
                                        <div class="teacher">Mary Sheldon</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Weekend class" class="hatha-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">11.00-12.00</div>
                                        <div class="fc-event-title">Hatha yoga</div>
                                        <div class="disc text-regular">Weekend class</div>
                                        <div class="teacher">Mary Sheldon</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Weekend class" class="hatha-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">11.00-12.00</div>
                                        <div class="fc-event-title">Hatha yoga</div>
                                        <div class="disc text-regular">Weekend class</div>
                                        <div class="teacher">Mary Sheldon</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="bg-white">
                                    <div class="fc-event-inner"><span class="h6 text-base">12.00</span></div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Basic kundalini" class="kundalini-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">12.00-13.00</div>
                                        <div class="fc-event-title">Kundalini yoga</div>
                                        <div class="disc text-regular">Basic kundalini</div>
                                        <div class="teacher">Grace Dian</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div data-description="Weight loss" class="ashtanga-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">12.00-13.00</div>
                                        <div class="fc-event-title">Ashtanga yoga</div>
                                        <div class="disc text-regular">Weight loss</div>
                                        <div class="teacher">Lily Carter</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Basic kundalini" class="kundalini-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">12.00-13.00</div>
                                        <div class="fc-event-title">Kundalini yoga</div>
                                        <div class="disc text-regular">Basic kundalini</div>
                                        <div class="teacher">Grace Dian</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                            <td>
                                <div data-description="Basic kundalini" class="kundalini-yoga fc-event showAll">
                                    <div class="fc-event-inner">
                                        <div class="fc-event-time">12.00-13.00</div>
                                        <div class="fc-event-title">Kundalini yoga</div>
                                        <div class="disc text-regular">Basic kundalini</div>
                                        <div class="teacher">Grace Dian</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="bg-white fc-event showAll"></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="section-55 text-center">
            <div class="container">
                <div class="heading-variant-4">
                    <p><span class="icon icon-sm icon-dark fl-bigmug-line-photo181"></span></p>
                    <h1>Video</h1>
                </div>
            </div>
            <br>
            <div class="col-xs-12">
                <div class="post-blog post-blog-mod-2">
                    <div class="post-img">
                        <iframe src="https://www.youtube.com/embed/oX6I6vs1EFs" allowfullscreen="" class="post-video"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--section 8-->
        <section class="section-55 section-lg-top-115 text-center">
            <div class="container">
                <h1>Catalogue des produits</h1>
                <div class="row clearleft-custom offset-top-45">
                    @foreach($products as $product)
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="product"><img src="https://westindiescare.ikaedigital.com/{{$product['photo']}}" alt="">
                            <div class="caption">
                                <h5><a href="{{route('front.product', ['id' => $product['id']])}}">{{$product['title']}}</a></h5>
                                <div class="product-price"><span class="price-old h6">
                                        @if($product['oldprice'])
                                    <del>{{$product['oldprice']}} €</del>
                                        @endif
                                    </span><span class="price-new h6">{{$product['price']}} €</span></div>
                                <div class="product-footer">
                                    <div class="icon-group-inline"><a href="#"><span class="icon icon-sm icon-primary icon-circle-sm fl-bigmug-line-shopping204"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-55 section-sm-top-115 section-sm-bottom-115 text-center">
            <div class="container">
                <div class="heading-variant-4">
                    <p><span class="icon icon-sm icon-dark fl-bigmug-line-photo181"></span></p>
                    <h1>Instagram feeds</h1>
                </div>
                <!-- RD Instafeed-->
            </div>
            <div data-photo-swipe-gallery="gallery" class="range range-condensed offset-top-40">
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="#" class="img-thumbnail-variant-3"><img src="{{asset('front/images/insta-1.jpg')}}" alt=""></a></div>

            </div>

        </section>

@endsection
