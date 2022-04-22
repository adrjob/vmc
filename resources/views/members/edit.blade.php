@extends('layouts.app', ['activePage' => 'member-management', 'menuParent' => 'member', 'titlePage' => __('Member Management')])

@section('content')
    <style>
        input {
            width: 100%;
        }
    </style>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('member.update', $member) }}" autocomplete="off">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __('Edit Member') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('member.index') }}" class="btn btn-round btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                  <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Profile photo') }}</label>
                      <div class="col-sm-7">
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-circle">
                                  @if ($member->picture)
                                      <img src="{{ $member->profilePictureMember() }}" alt="...">
                                  @else
                                      <img src="{{ asset('white') }}/img/placeholder.jpg" alt="...">
                                  @endif
                              </div>
                              <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                              <div>
                        <span class="btn btn-round btn-file">
                          <span class="fileinput-new">{{ __('Select image') }}</span>
                          <span class="fileinput-exists">{{ __('Change') }}</span>
                          <input type="file" name="photo" id = "input-picture" />
                        </span>
                                  <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> {{ __('Remove') }}</a>
                              </div>
                              @include('alerts.feedback', ['field' => 'photo'])
                          </div>
                      </div>
                  </div>
                <!-- Row 1 -->
                <div class="row">
                  <div class="col">
                      <label class="col-form-label">{{ __('Name') }}</label>
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $member->name) }}" required="true" aria-required="true"/>
                          @include('alerts.feedback', ['field' => 'name'])
                      </div>
                  </div>
                  <div class="col">
                      <label class="col-form-label">{{ __('Gender') }}</label>
                      <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="gender" id="input-email" type="text" placeholder="{{ __('Gender') }}" value="{{ old('gender', $member->gender) }}" />
                          @include('alerts.feedback', ['field' => 'email'])
                      </div>
                  </div>
                </div>
                <!-- Row 2 -->
                <div class="row">
                  <div class="col">
                      <label class="col-form-label">{{ __('Email') }}</label>
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email" id="input-name" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $member->email) }}"/>
                          @include('alerts.feedback', ['field' => 'name'])
                      </div>
                  </div>
                  <div class="col">
                      <label class="col-form-label">{{ __('Mobile Phone') }}</label>
                      <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="phone" id="input-email" type="text" placeholder="{{ __('Phone') }}" value="{{ old('phone', $member->phone) }}"/>
                          @include('alerts.feedback', ['field' => 'email'])
                      </div>
                  </div>
                </div>


              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-round btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>

            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Meetings') }}</h4>
                </div>
                <div class="card-body ">

                    <div class="table-responsive">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                            <thead class="text-primary">
                            <th>
                                {{ __('Name') }}
                            </th>
                            <th>
                                {{ __('Description') }}
                            </th>
                            <th>
                                {{ __('Date') }}
                            </th>
                            </thead>
                            <tbody>
                            @foreach($meetings as $meeting)
                                    <tr>
                                        <td>
                                            {{ $member->meetingName($member->id) }}
                                        </td>
                                        <td>
                                            {{ $member->meetingDesc($member->id) }}
                                        </td>
                                        <td>
                                            {{ $member->meetingDate($member->id) }}
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
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Meeting",
                },
            });
        });
    </script>
@endpush

