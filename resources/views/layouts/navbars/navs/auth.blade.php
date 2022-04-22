<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize d-inline">
        <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
          <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
          <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
        </button>
      </div>
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="javascript:void(0)">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <img src="{{ asset("white") }}/img/new-logo.png" style="width: 7%; margin-left: 38%; margin-bottom: -1%">
      <ul class="navbar-nav ml-auto">
         <li style="margin-top: 15px">
             <div id="my-date"></div>
             <script>
                 function myHijriDateFormat(date) {
                     let startDate= new Date(date),
                         c= 'en-u-ca-islamic-umalqura-nu-latn',  // use 'islamic-umalqura' calendar for the islamic date
                         n='numeric',
                         iDay  =new Intl.DateTimeFormat(c,{day  :n}).format(startDate),
                         iMonth=new Intl.DateTimeFormat(c,{month:'long'}).format(startDate),
                         iYear =new Intl.DateTimeFormat(c,{year :n}).format(startDate).split(" ")[0];

                     var tt = iDay+" "+iMonth+", "+iYear;

                     var div = document.getElementById('my-date');

                     div.innerHTML +=  iDay+" "+iMonth+", "+iYear;
                 }
                 myHijriDateFormat(Date.now());

                 // console.log(myHijriDateFormat(new Date(Date.now()))); // today's date
                 // console.log(myHijriDateFormat("2022-04-02"));         // first Ramadan 2022
             </script>
         </li>

        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="photo">
              <img src="{{ auth()->user()->profilePicture() }}" alt="Profile Photo">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            </p>
          </a>
          <ul class="dropdown-menu dropdown-navbar">
            <li class="nav-link">
              <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-link">
              <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            </li>
          </ul>
        </li>
        <li class="separator d-lg-none"></li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js" integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" integrity="sha512-okE4owXD0kfXzgVXBzCDIiSSlpXn3tJbNodngsTnIYPJWjuYhtJ+qMoc0+WUwLHeOwns0wm57Ka903FqQKM1sA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.jsdelivr.net/gh/xsoh/Hijri.js/Hijri.js"></script>
<script>

    // jQuery(function($){
    //     $("#my-date").click(function () {
    //         $( "#my-date" ).datepicker({
    //             changeMonth: true, // show months menu
    //             changeYear: true, // show years menu
    //             dayNamesMin: [ "س", "ج", "خ", "ر", "ث", "ن", "ح" ], // arabic days names
    //             dateFormat: "dd-mm-yy", // set format to dd-mm-yyyy
    //             monthNames: [ "محرم", "صفر", "ربيع الأول", "ربيع الثاني", "جمادى الأول", "جمادى الثاني", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
    //             yearRange: "c-0:c+15", // year range in Hijri from current year and +15 years
    //             monthNamesShort: [ "محرم", "صفر", "ربيع ١", "ربيع ٢", "جمادى ١", "جمادى ٢", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
    //             showAnim: 'bounce'
    //         });
    //     });
    // })(jQuery)
</script>

<!-- End Navbar -->
