@extends('layouts.app', ['activePage' => 'meetings-management', 'menuParent' => 'meetings', 'titlePage' => __('Meeting Create')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="{{ route('meetings.store') }}" autocomplete="off">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Add Meeting') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('meetings.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('m_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('m_name') ? ' is-invalid' : '' }}" name="m_name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('m_name') }}" required="true" aria-required="true"/>
                                            @include('alerts.feedback', ['field' => 'm_name'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('m_date') ? ' is-invalid' : '' }}" name="m_date" id="input-name" type="datetime-local" placeholder="{{ __('Date') }}" value="{{ old('m_date') }}" />
                                            @include('alerts.feedback', ['field' => 'm_date'])
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Add Meeting') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
