@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="d-flex justify-content-center">
                <h1 class="display-3">{{ trans('message.update_employee') }}</h1>
            </div>

            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif

            <form method="post" action="{{ route('contacts.update', $contact->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">{{ trans('message.name') }}:</label>
                    <input type="text" class="form-control" name="name" value="{{ $contact->name }}"/>
                </div>

                <div class="form-group">
                    <label for="email">{{ trans('message.email') }}:</label>
                    <input type="text" class="form-control" name="email" value="{{ $contact->email }}"/>
                </div>

                <div class="form-group">
                    <label for="phone">{{ trans('message.phone') }}:</label>
                    <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}"/>
                </div>

                <div class="form-group">
                    <label for="city">{{ trans('message.city') }}</label>
                    <input type="text" class="form-control" name="city" value="{{ $contact->city }}"/>
                </div>

                <div class="form-group">
                    <label for="language" class="col-sm-2 control-label">{{ trans('message.language') }}</label>
                    <div class="col-sm-5">
                        <select name="language" class="form-control">
                            @foreach (config('constants') as $language)
                                <option value="{{ $language }}"
                                        @if ($language == old($language))
                                            selected
                                        @endif
                                >{{ $language }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{ trans('message.edit') }}</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-primary">{{ trans('message.cancel') }}</a>
            </form>
        </div>
    </div>
@endsection
