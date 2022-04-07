@extends('layouts.app', ['activePage' => 'meetings-management', 'menuParent' => 'meetings', 'titlePage' => __('Meetings Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Meetings') }}</h4>
                        </div>
                        <div class="card-body">
                            @can('create', App\User::class)
                                <div class="row">
                                    <div class="col-12 text-right mb-3">
                                        <a href="{{ route('meetings.create') }}" class="btn btn-sm btn-primary">{{ __('Add Meeting') }}</a>
                                    </div>
                                </div>
                            @endcan
                            <div class="table-responsive">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                                    <thead class="text-primary">
                                    <th>
                                        {{ __('ID') }}
                                    </th>
                                    <th>
                                        {{ __('Created At') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($meetings as $meeting)
                                        <tr>
                                            <td>
                                                {{ $meeting->id }}
                                            </td>
                                            <td>
                                                {{ $meeting->created_at }}
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
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#datatables').fadeIn(1100);
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Meeting",
                },
                "columnDefs": [
                    { "orderable": false, "targets": 5 },
                ],
            });
        });
    </script>
@endpush
