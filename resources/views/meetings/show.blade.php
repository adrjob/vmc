@extends('layouts.app', ['activePage' => 'meetings-management', 'menuParent' => 'meetings', 'titlePage' => __('Meetings Management')])

@section('content')
    <style>
    .my-side {
        position: fixed;
        width: 250px;
        top:5%;
        right: 0;
        bottom: 0;
        padding-top: 50px;
    }

    .m_date {
        display: inline-block;
        /*font-size: 1.5em;*/
        /*list-style-type: none;*/
        /*padding: 1em;*/
        /*text-transform: uppercase;*/
    }

    .m_date span {
        /*display: block;*/
        font-size: 1rem;
    }

    .emoji {
        display: none;
        padding: 1rem;
    }

    .emoji span {
        font-size: 4rem;
        padding: 0 .5rem;
    }
    </style>
    <div class="content">
        <div class="container-fluid">
            <input type="hidden" value="{{ $meeting->m_date }}" id="m_date">
{{--            <div class="row"> <!-- Start Mini Sidebar -->--}}
{{--                <div class="col-md-12 my-side">--}}
{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-5">--}}
{{--                                        <div class="info-icon text-center icon-warning">--}}
{{--                                            <i class="tim-icons icon-chat-33"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-7">--}}
{{--                                        <div class="numbers">--}}
{{--                                            <p class="card-category">Date</p>--}}
{{--                                            <h5 class="card-title">150GB</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <hr>--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="tim-icons icon-refresh-01"></i> Update Now--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-5">--}}
{{--                                        <div class="info-icon text-center icon-primary">--}}
{{--                                            <i class="tim-icons icon-shape-star"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-7">--}}
{{--                                        <div id="countdown">--}}
{{--                                            <ul>--}}
{{--                                                <li class="m_date"><span class="m_date_span" id="days"></span>days</li>--}}
{{--                                                <li class="m_date"><span class="m_date_span" id="hours"></span>Hours</li>--}}
{{--                                                <li class="m_date"><span class="m_date_span" id="minutes"></span>Minutes</li>--}}
{{--                                                <li class="m_date"><span class="m_date_span" id="seconds"></span>Seconds</li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <hr>--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="tim-icons icon-sound-wave"></i> Last Research--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-5">--}}
{{--                                        <div class="info-icon text-center icon-success">--}}
{{--                                            <i class="tim-icons icon-single-02"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-7">--}}
{{--                                        <div class="numbers">--}}
{{--                                            <p class="card-category">Users</p>--}}
{{--                                            <h3 class="card-title">150,000</h3>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <hr>--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="tim-icons icon-trophy"></i> Customers feedback--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-5">--}}
{{--                                        <div class="info-icon text-center icon-danger">--}}
{{--                                            <i class="tim-icons icon-molecule-40"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-7">--}}
{{--                                        <div class="numbers">--}}
{{--                                            <p class="card-category">Errors</p>--}}
{{--                                            <h3 class="card-title">12</h3>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <hr>--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="tim-icons icon-watch-time"></i> In the last hours--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div><!-- End Mini Sidebar -->--}}
            <div class="row"><!-- Page Content -->
                <div class="col-md-9 text-left">
                    <div class="card" style="width: 107%">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Meeting Details') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-left mb-3">
                                    Name: {{ $meeting->m_name }} <br><br>
                                    Date: {{ $meeting->m_date }} <br><br>
                                    Description: {{ $meeting->m_desc }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>

                    </script>

                    <div class="card" style="width: 107%">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Participants') }}</h4>
                        </div>
                        <div class="row" style="margin-right: 0px">
                            <div class="col-12 text-right mb-3">
                                <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" style="color: white !important;">{{ __('Add Participant') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatables-1" class="table table-striped table-no-bordered table-hover" style="display:none">
                                    <thead class="text-primary">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Sponsor') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($participants as $participant)
                                        <tr>
                                            <td>
                                                {{ $participant->name }}
{{--                                                    {{ $member = \App\Member::where('id', $participant->m_member_id)->get() }}--}}
                                            </td>
                                            <td>
                                                {{ $participant->sponsor }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('participant.store') }}" autocomplete="off">
        @csrf
        @method('post')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Participants</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
                <input type="hidden" name="m_id" value="{{ $meeting->id }}">
                <div class="modal-body">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="m_member_id">
                        @foreach($members as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </form>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#datatables-1').fadeIn(1100);
            $('#datatables-1').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Participants",
                },
            });
        });

        // (function () {
        //     const second = 1000,
        //         minute = second * 60,
        //         hour = minute * 60,
        //         day = hour * 24;
        //
        //     var m_date1 = document.getElementById("m_date").value;
        //
        //     let m_tod = new Date(m_date1),
        //         m_dd = String(m_tod.getDate()).padStart(2, "0"),
        //         m_mm = String(m_tod.getMonth() + 1).padStart(2, "0"),
        //         m_yyyy = m_tod.getFullYear(),
        //         m_date = m_mm + "/" + m_dd + "/" + m_yyyy;
        //
        //
        //     //I'm adding this section so I don't have to keep updating this pen every year :-)
        //     //remove this if you don't need it
        //     let today = new Date(),
        //         dd = String(today.getDate()).padStart(2, "0"),
        //         mm = String(today.getMonth() + 1).padStart(2, "0"),
        //         yyyy = today.getFullYear();
        //
        //     // var m_date1 = document.getElementById("m_date").value;
        //     // var birthday = m_date1.formatDate('dd M yy', new Date());
        //
        //
        //
        //
        //     today = mm + "/" + dd + "/" + yyyy;
        //     if (today > m_date) {
        //         birthday = dayMonth + yyyy;
        //     }
        //     //end
        //
        //     const countDown = new Date(m_date).getTime(),
        //         x = setInterval(function() {
        //
        //             const now = new Date().getTime(),
        //                 distance = countDown - now;
        //
        //             document.getElementById("days").innerText = Math.floor(distance / (day)),
        //                 document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
        //                 document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
        //                 document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
        //
        //             //do something later when date is reached
        //             if (distance < 0) {
        //                 document.getElementById("headline").innerText = "It's my birthday!";
        //                 document.getElementById("countdown").style.display = "none";
        //                 document.getElementById("content").style.display = "block";
        //                 clearInterval(x);
        //             }
        //             //seconds
        //         }, 0)
        // }());

    </script>
@endpush
