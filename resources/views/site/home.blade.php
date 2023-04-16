@extends('layouts.appPortal')
@section('content')


<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

	<div class="row">
	  <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
       data-aos="zoom-in">
		<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" 
        class="venobox play-btn mb-4" data-vbtype="video" 
        data-autoplay="true"></a>
	  </div>

	  <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
		<div class="box-heading" data-aos="fade-up">
		  <h4>من نحن</h4>
		  <h3>تأسست كواحدة من أكبر مرافق تصنيع الزجاج والألمنيوم في المملكة العربية السعودية</h3>
		  <p>تم تشكيل شركتنا على مجموعة من المعايير والمبادئ التوجيهية الدولية الصارمة التي مكنتنا من وضع أنفسنا بشكل فريد في السوق.

			من خلال مجموعتنا الشاملة من الخدمات ، نحن قادرون على توفير قدرات استثنائية في التصميم والتصنيع والتوزيع بالإضافة إلى مجموعة لا مثيل لها من منتجات الزجاج والألمنيوم</p>
		</div>

        @foreach($aboutusData as $data)
		<div class="icon-box" data-aos="fade-up">
		  <div class="icon"><i class="bx bx-atom"></i></div>
		  <h4 class="title"><a href="#">{{ $data->name_ar}} </a></h4>
		  <p class="description"> {{ $data->title_ar}} .</p>
		</div>
        @endforeach

		

	  </div>
	</div>

  </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<!--section id="why-us" class="why-us">
  <div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>لماذا نحن</h2>
	  <h3>لماذا يجب عليك <span>اختيارنا</span>؟</h3>
	  <p>مع أكثر من 15 عاما من الخبرة والتركيز الحقيقي على رضا العملاء ، يمكنك الاعتماد علينا في التجديد التالي أو تعيين الممر أو إصلاح المنزل.</p>
	</div>

	<div class="row">

	  <div class="col-lg-4">
		<div class="box" data-aos="fade-up">
		  <span>01</span>
		  <h4>تصنيع الألمنيوم</h4>
		  <p>مع أكثر من 15 عاما من الخبرة والتركيز الحقيقي على رضا العملاء ، يمكنك الاعتماد علينا في التجديد التالي أو تعيين الممر أو إصلاح المنزل.</p>
		</div>
	  </div>

	  <div class="col-lg-4 mt-4 mt-lg-0">
		<div class="box" data-aos="fade-up" data-aos-delay="100">
		  <span>02</span>
		  <h4>زجاج</h4>
		  <p>لدينا مصنع زجاج متكامل بطاقة إنتاجية تزيد عن 1500 متر مربع يوميا.</p></br>
		</div>
	  </div>

	  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
		<div class="box">
		  <span>03</span>
		  <h4> تركيب</h4>
		  <p>مع أكثر من 15 عاما من الخبرة والتركيز الحقيقي على رضا العملاء ، يمكنك الاعتماد علينا في التجديد التالي أو تعيين الممر أو إصلاح المنزل.</p>
		</div>
	  </div>

	</div>

  </div>
</section--><!-- End Why Us Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

	<div class="row counters">

	  <div class="col-lg-3 col-6 text-center">
		<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
		<p>مشروع سنوياً</p>
	  </div>

	  <div class="col-lg-3 col-6 text-center">
		<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
		<p>انتاج يومي</p>
	  </div>

	  <div class="col-lg-3 col-6 text-center">
		<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
		<p>عميل جديد</p>
	  </div>

	  <div class="col-lg-3 col-6 text-center">
		<span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
		<p>مصنع </p>
	  </div>

	</div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

	<div class="text-center">
	  <h3>جودة البناء. خدمة صادقة. قيمة كبيرة</h3>
	  <p>يعمل فريقنا المحترف على زيادة الإنتاجية وفعالية التكلفة في السوق</p>
	  <a class="cta-btn" href="#contact">اطلب الآن</a>
	</div>

  </div>
</section><!-- End Cta Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>خدماتنا</h2>
	  <h3>جميع <span>الخدمات</span></h3>
	  <p>نحن نقدم خدمات للافراد والشركات و القطاع الحكومي بضمان وجودة عالية</p>
	</div>


	<div class="row">

    @foreach($serviceData as $data)
	  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
		<div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
		  <div class="icon"><i class="bx bx-arch"></i></div>
		  <h4><a href="#">{{ $data->name_ar}} </a></h4>
		  <p>{{ $data->desc_ar}}</p>
		</div>
	  </div>
      @endforeach


	</div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>اعمالنا</h2>
	  <h3>ابرز <span>اعمالنا</span></h3>
	  <p>تم بفضل الله وحمده العمل مع اكثر من جهه من تركيب زجاج والمونيوم ومشاريع اخرى.</p>
	</div>

	<div class="row">
	  <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
		<ul id="portfolio-flters">
		  <li data-filter="*" class="filter-active">الكل</li>
		  @foreach($allCat as $data)
		  <li data-filter=".filter-{{ $data->id}} ">{{ $data->name_ar}}  </li>
		  @endforeach
		</ul>
	  </div>
	</div>

	<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

	@foreach($allProject as $data)
	  <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $data->category_id}}">
		<img src="{{ URL ::to ('public/upload/'.$data->image)}}" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>{{ $data->name_ar}}</h4>
		  <p>{{ $data->desc_ar}}</p>
		  <a href="{{ URL ::to ('public/upload/'.$data->image)}}" 
		  data-gallery="{{ $data->name_ar}}" class="portfolio-lightbox preview-link" 
		  title="{{ $data->name_ar}}"><i class="bx bx-plus"></i></a>
		  <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		</div>
	  </div>
	  @endforeach

	

	</div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <!--div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>فريق العمل </h2>
	  <h3>Our Hard Working <span>Team</span></h3>
	  <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
	</div>

	<div class="row">

	  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
		<div class="member" data-aos="fade-up">
		  <div class="member-img">
			<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		  <div class="member-info">
			<h4>Walter White</h4>
			<span>Chief Executive Officer</span>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
		<div class="member" data-aos="fade-up" data-aos-delay="100">
		  <div class="member-img">
			<img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		  <div class="member-info">
			<h4>Sarah Jhonson</h4>
			<span>Product Manager</span>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
		<div class="member" data-aos="fade-up" data-aos-delay="200">
		  <div class="member-img">
			<img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		  <div class="member-info">
			<h4>William Anderson</h4>
			<span>CTO</span>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
		<div class="member" data-aos="fade-up" data-aos-delay="300">
		  <div class="member-img">
			<img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		  <div class="member-info">
			<h4>Amanda Jepson</h4>
			<span>Accountant</span>
		  </div>
		</div>
	  </div>

	</div>

  </div-->
</section><!-- End Team Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

	<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
	  <div class="swiper-wrapper">

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<img src="{{ asset('public/portal/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
			<h3>عميل 1</h3>
			<h4> مدير شركه </h4>
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			 من المصانع الاكثر من رائعه التى تم التعامل معاها
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<img src="{{ asset('public/portal/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
			<h3> عميل 2</h3>
			<h4>مدير مصنع</h4>
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			 اوصى بالتعامل مع مصنع سابقه الحديث للزجاج والالمونيوم من حيث التعامل وكفاءه المنتجات 
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
		  </div>
		</div><!-- End testimonial item -->

	  </div>
	  <div class="swiper-pagination"></div>
	</div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <!--div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>Pricing</h2>
	  <h3>Check our <span>Pricing</span></h3>
	  <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
	</div>

	<div class="row">

	  <div class="col-lg-4 col-md-6">
		<div class="box" data-aos="zoom-in" data-aos-delay="200">
		  <h3>Free</h3>
		  <h4><sup>$</sup>0<span> / month</span></h4>
		  <ul>
			<li>Aida dere</li>
			<li>Nec feugiat nisl</li>
			<li>Nulla at volutpat dola</li>
			<li class="na">Pharetra massa</li>
			<li class="na">Massa ultricies mi</li>
		  </ul>
		  <div class="btn-wrap">
			<a href="#" class="btn-buy">Buy Now</a>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
		<div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
		  <span class="recommended-badge">Recommended</span>
		  <h3>Business</h3>
		  <h4><sup>$</sup>19<span> / month</span></h4>
		  <ul>
			<li>Aida dere</li>
			<li>Nec feugiat nisl</li>
			<li>Nulla at volutpat dola</li>
			<li>Pharetra massa</li>
			<li class="na">Massa ultricies mi</li>
		  </ul>
		  <div class="btn-wrap">
			<a href="#" class="btn-buy">Buy Now</a>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
		<div class="box" data-aos="zoom-in" data-aos-delay="200">
		  <h3>Developer</h3>
		  <h4><sup>$</sup>29<span> / month</span></h4>
		  <ul>
			<li>Aida dere</li>
			<li>Nec feugiat nisl</li>
			<li>Nulla at volutpat dola</li>
			<li>Pharetra massa</li>
			<li>Massa ultricies mi</li>
		  </ul>
		  <div class="btn-wrap">
			<a href="#" class="btn-buy">Buy Now</a>
		  </div>
		</div>
	  </div>

	</div>

  </div-->
</section><!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>الأسألة الشائعة</h2>
	  <h3>بعض <span>الأسألة الشائعة</span></h3>
	  <p>تقديم المعلومة الدقيقة للجمهور وزيادة الوعي الإرشادي
.</p>
	</div>

	<div class="faq-list">
	  <ul>

	  @foreach($allFaq as $data)
		<li data-aos="fade-up">
		  <i class="bx bx-help-circle icon-help"></i>
		   <a data-bs-toggle="collapse" class="collapse" 
		   data-bs-target="#faq-list-{{ $data->id }}">   {{ $data->question_ar }}
		   <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-{{ $data->id }}" class="collapse show" data-bs-parent=".faq-list">
			<p>
			{{ $data->answer_ar }} 
			</p>
		  </div>
		</li>
		@endforeach

		
		
		
	  </ul>
	</div>

  </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

	<div class="section-title" data-aos="zoom-in">
	  <h2>التواصل </h2>
	  <h3>بإمكانك  <span>التواصل معنا</span> من هنا </h3>
	  <p>نحن نستمع إليك. يرجى اختيار وسيلة الاتصال المفضلة لديك
	  وسيقوم أحد موظفينا بالتواصل معك قريبًا. ... سوف يسعدنا أن نسمع صوتكِ
.</p>
	</div>

	<div>
	  <iframe style="border:0; width: 100%; height: 270px;" 
      src="{{$settingData->map_link}}" frameborder="0" allowfullscreen></iframe>
	
	</div>

	<div class="row mt-5">

	  <div class="col-lg-4" data-aos="fade-right">
		<div class="info">
		  <div class="address">
			<i class="bi bi-geo-alt"></i>
			<h4>العنوان:</h4>
			<p>  {{$settingData->address_ar}}  </p>
		  </div>

		  <div class="email">
			<i class="bi bi-envelope"></i>
			<h4>الإيميل:</h4>
			<p>{{$settingData->email}}</p>
		  </div>

		  <div class="phone">
			<i class="bi bi-phone"></i>
			<h4>الهاتف:</h4>
			<p>{{$settingData->phone}}</p>
		  </div>

		</div>

	  </div>

	  <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
	  @if(Session::has('flash_message'))
            <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
            @endif
		<form action="{{ URL :: to ('/contactUsForm')}}"
		 method="post" role="form" >
		{{ csrf_field() }}
		  <div class="row">
			<div class="col-md-6 form-group">
			  <input type="text" name="name" class="form-control" 
			  id="name" placeholder="الاسم الثلاثي " required>
			</div>
			<div class="col-md-6 form-group mt-3 mt-md-0">
			  <input type="email" class="form-control"
			   name="email" id="email" placeholder="البريد الألكتروني" required>
			</div>
		  </div>
		  <div class="form-group mt-3">
			<input type="text" class="form-control" name="subject" 
			id="subject" placeholder="الموضوع" required>
		  </div>
		  <div class="form-group mt-3">
			<textarea class="form-control" name="message" 
			rows="5" placeholder="الرسالة" required></textarea>
		  </div>
		  <div class="my-3">
		  <div class="text-center"><button type="submit" class="bb">ارسال</button></div>
		</form>

	  </div>

	</div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->



@endsection