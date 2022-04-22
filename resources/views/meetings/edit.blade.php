@extends('layouts.app', ['activePage' => 'meetings-management', 'menuParent' => 'meetings', 'titlePage' => __('Meeting Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="{{ route('meetings.update', $meeting) }}" autocomplete="off">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Edit Meeting') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('meetings.index') }}" class="btn btn-round btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-cont rol{{ $errors->has('name') ? ' is-invalid' : '' }}" name="m_name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $meeting->m_name) }}" required="true" aria-required="true"/>
                                            @include('alerts.feedback', ['field' => 'name'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('m_desc') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('m_desc') ? ' is-invalid' : '' }}" name="m_desc" id="input-email" type="text" placeholder="{{ __('Description') }}" value="{{ old('m_desc', $meeting->m_desc) }}"/>
                                            @include('alerts.feedback', ['field' => 'email'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('m_date') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('m_date') ? ' is-invalid' : '' }}" name="m_date" id="input-name" type="datetime-local" placeholder="{{ __('Date') }}" value="{{ old('m_date', $meeting->m_date) }}" />
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
                </div>
            </div>
        </div>
    </div>
@endsection
