@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="d-flex justify-content-center">
                <a class="btn btn-success active" href="{{ route('lang',['lang' => 'vi']) }}">{{ trans('message.vn') }}</a>
                <a class="btn btn-success active" href="{{ route('lang',['lang' => 'en' ]) }}">{{ trans('message.en') }}</a>
            </div>
            <div class="d-flex justify-content-center">
                <h1 class="display-3">{{ trans('message.employee_manage') }}</h1>
            </div>

            @if (session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif

            <form method="post" action="{{ route('contacts.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">{{ trans('message.name') }}:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                    <label for="email">{{ trans('message.email') }}:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>

                <div class="form-group">
                    <label for="phone">{{ trans('message.phone') }}:</label>
                    <input type="text" class="form-control" name="phone"/>
                </div>

                <div class="form-group">
                    <label for="city">{{ trans('message.city') }}</label>
                    <input type="text" class="form-control" name="city"/>
                </div>

                <div class="form-group">
                    <label for="language" class="col-sm-2 control-label">{{ trans('message.language') }}</label>
                    <div class="col-sm-5">
                        <select name="language" class="form-control">
                            <option value={{ config('constants.php') }}>{{ trans('message.php') }}</option>
                            <option value={{ config('constants.ruby') }}>{{ trans('message.ruby') }}</option>
                            <option value={{ config('constants.ios') }}>{{ trans('message.ios') }}</option>
                            <option value={{ config('constants.mobile') }}>{{ trans('message.mobile') }}</option>
                            <option value={{ config('constants.qa') }}>{{ trans('message.qa') }}</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{ trans('message.add_employee') }}</button>
            </form>
        </div>
    </div>
@endsection
