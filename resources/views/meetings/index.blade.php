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
                                        <a href="{{ route('meetings.create') }}" class="btn btn-round btn-sm btn-primary">{{ __('Add Meeting') }}</a>
                                    </div>
                                </div>
                            @endcan
                            <div class="table-responsive">
                                <table id="datatables-1" class="table table-striped table-no-bordered table-hover" style="display:none">
                                    <thead class="text-primary">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Created At') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($meetings as $meeting)
                                        <tr>
                                            <td>
                                                {{ $meeting->m_name }}
                                            </td>
                                            <td>
                                                {{ $meeting->m_date }}
                                            </td>

                                            <td class="td-actions text-right">
                                                    <form action="{{ route('meetings.destroy', $meeting) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                            <a href="{{ route('meetings.show', $meeting) }}" class="btn btn-link btn-primary btn-icon btn-sm edit"><i class="tim-icons icon-notes"></i></a>
                                                            @if(auth()->user()->isAdmin())
                                                            <a href="{{ route('meetings.edit', $meeting) }}" class="btn btn-link btn-primary btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                                                            @endif
                                                            <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this meeting?") }}') ? this.parentElement.submit() : ''">
                                                                <i class="tim-icons icon-simple-remove"></i>
                                                            </button>
                                                    </form>
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
            $('#datatables-1').fadeIn(1100);
            $('#datatables-1').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Meeting",
                },
            });
        });
    </script>
@endpush
