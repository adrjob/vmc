@extends('layouts.app', ['activePage' => 'member-management', 'menuParent' => 'member', 'titlePage' => __('Member Management')])

@section('content')




<div class="content">



</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js" integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" integrity="sha512-okE4owXD0kfXzgVXBzCDIiSSlpXn3tJbNodngsTnIYPJWjuYhtJ+qMoc0+WUwLHeOwns0wm57Ka903FqQKM1sA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/gh/xsoh/Hijri.js/Hijri.js"></script>

<script>

    function myHijriDateFormat() {
        let startDate= new Date(),
            c= 'en-u-ca-islamic-umalqura-nu-latn',  // use 'islamic-umalqura' calendar for the islamic date
            n='numeric',
            iDay  =new Intl.DateTimeFormat(c,{day  :n}).format(startDate),
            iMonth=new Intl.DateTimeFormat(c,{month:'long'}).format(startDate),
            iYear =new Intl.DateTimeFormat(c,{year :n}).format(startDate).split(" ")[0];

            // console.log(iDay +'/' + iMonth  + '/' + iYear);

            if(iMonth == 'Shaʻban')
            {
                iMonth = '3';
            }

            mydate = iDay +'/' + iMonth  + '/' + iYear;

            m = moment(mydate);
            m.format('iYYYY/iM/iD [is] YYYY/M/D'); // 1410/8/28 is 1990/3/25

        console.log(m.iYear());
    }

    myHijriDateFormat();




    console.log(m.format('iYYYY/iM/iD [is] YYYY/M/D'));

    // m.iYear(); // 1410
    // m.iMonth(); // 7
    // m.iDate(); // 28
    // m.iDayOfYear(); // 236
    // m.iWeek(); // 35
    // m.iWeekYear(); // 1410
    //
    // m.add(1, 'iYear');
    // m.add(2, 'iMonth');
    // m.format('iYYYY/iM/iD'); // 1411/10/28
    //
    // m.iMonth(11);
    // m.startOf('iMonth');
    // m.format('iYYYY/iM/iD'); // 1411/12/1
    //
    // m.iYear(1392);
    // m.startOf('iYear');
    // m.format('iYYYY/iM/iD'); // 1420/1/1
    //
    // moment('1436/1/30', 'iYYYY/iMM/iDD').isValid(); // false (This month is only 29 days).
    // moment('1436/2/30', 'iYYYY/iMM/iDD').isValid(); // true (This month is 30 days).
    //
    // moment('1436/2/6 16:40', 'iYYYY/iM/iD HH:mm').format('YYYY-M-D HH:mm:ss'); // 2014-11-28 16:40:00
    //
    // moment('2014-11-28 16:40:00', 'YYYY-M-D HH:mm:ss').endOf('iMonth').format('iYYYY/iM/iD HH:mm:ss'); // 1436/2/30 23:59:59
    //
    // // Complex parse:
    // moment('1990 5 25', 'YYYY iM D').format('YYYY/MM/DD'); // 1990/03/25



</script>

@endsection
