{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>Document</title>--}}

{{--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>--}}
{{--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>--}}

{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.full.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>--}}

{{--    <style>--}}
{{--        .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {--}}
{{--            border: 1px solid #ddd;--}}
{{--            padding: 5px !important;--}}
{{--            font-weight: initial;--}}
{{--        }--}}
{{--        tr {--}}
{{--            font-weight: bold !important;--}}
{{--        }--}}
{{--        .title {--}}
{{--            background-color: #0b5b98;--}}
{{--            border: 0px;--}}
{{--            padding: 10px;--}}
{{--            color: whitesmoke;--}}
{{--            font-size: 20px;--}}
{{--        }--}}
{{--    </style>--}}

{{--</head>--}}
{{--<body>--}}

{{--<div class="text-center title">--}}
{{--    Events--}}
{{--</div>--}}
{{--<table id="table" class="table table-bordered">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>Column 1</th>--}}
{{--        <th>Column 2</th>--}}
{{--        <th>Column 3</th>--}}
{{--        <th>Column 4</th>--}}
{{--        <th>Column 5</th>--}}
{{--        <th>Column 6</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}

{{--    @foreach($events as $event)--}}
{{--        <tr>--}}
{{--            <td data-name="column1" data-placement="bottom" class="task" data-type="text">&nbsp; {{ $event->column1 }}</td>--}}
{{--            <td data-name="column2" data-placement="bottom" class="task" data-type="text">{{ $event->column2 }}</td>--}}
{{--            <td data-name="column3" data-placement="bottom" class="task" data-type="text">{{ $event->column3 }}</td>--}}
{{--            <td data-name="column4" data-placement="bottom" class="task" data-type="text">{{ $event->column4 }}</td>--}}
{{--            <td data-name="column5" data-placement="bottom" class="task" data-type="text">{{ $event->column5 }}</td>--}}
{{--            <td data-name="column6" data-placement="bottom" class="task" data-type="text">{{ $event->column6 }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}

{{--<div>--}}
{{--    <button class="btn btn-sm btn-success btn-submit" style="margin-left: 10px">Add New</button>--}}
{{--</div>--}}

{{--<script>--}}
{{--    $.ajaxSetup({--}}
{{--        headers: {--}}
{{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--        }--}}
{{--    });--}}

{{--    $.fn.editable.defaults.mode = 'inline';--}}

{{--    $('#table').editable({--}}
{{--        container: 'body',--}}
{{--        selector: 'td.task',--}}
{{--        title: 'task',--}}
{{--        url: "{{ route('events.update') }}" + '/' + 1,--}}
{{--        type: 'text',--}}
{{--        pk: 1,--}}
{{--        name: 'name',--}}
{{--        success: function (response, newValue) {--}}
{{--            console.log('Updated', response)--}}
{{--        }--}}
{{--    });--}}

{{--    $(".btn-submit").click(function(e){--}}

{{--        e.preventDefault();--}}

{{--        var member_id = $("input[name=name]").val();--}}

{{--        $.ajax({--}}
{{--            type:'POST',--}}
{{--            url:"{{ route('events.store') }}",--}}
{{--            data:{member_id:member_id},--}}
{{--            success:function(data){--}}
{{--                $("#table").load(location.href + "#table");--}}

{{--            }--}}
{{--        });--}}

{{--    });--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
