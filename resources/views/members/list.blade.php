@extends('layouts.app', ['activePage' => 'member-management', 'menuParent' => 'member', 'titlePage' => __('Member Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Members') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right mb-3">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#NewMemberModal">{{ __('Add Member') }}</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                                    <thead class="text-primary">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($members as $member)
                                        @if(auth()->user()->role_id == 1)
                                            <tr>
                                                <td>
                                                    {{ $member->name }}
                                                </td>
                                                <td>
                                                    {{ $member->created_at->format('Y-m-d') }}
                                                </td>
                                                <td class="text-right">
                                                    <form action="{{ route('member.destroy', $member) }}" method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <a href="{{ route('events.edit', $member->id) }}" class="btn btn-link btn-primary btn-icon btn-sm edit" target="_blank"><i class="tim-icons icon-notes"></i></a>
                                                        <a href="{{ route('member.edit', $member) }}" class="btn btn-link btn-primary btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>


                                                        <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this member?") }}') ? this.parentElement.submit() : ''">
                                                            <i class="tim-icons icon-simple-remove"></i>
                                                        </button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
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


    <!-- Modal New Member -->
    <div class="modal fade" id="NewMemberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{ route('member.store') }}" method="post">
            @csrf()
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="name">Name:</label>
                        <input id="name" type="text" name="name" style="width: 100%">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
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
                    searchPlaceholder: "Search users",
                },
                "columnDefs": [
                    { "orderable": false, "targets": 5 },
                ],
            });
        });
    </script>
@endpush
