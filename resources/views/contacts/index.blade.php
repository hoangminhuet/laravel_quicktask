@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 class="display-3 text-center">{{ trans('message.employee_manage') }}</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr class="text-center">
                    <td>{{ trans('message.id') }}</td>
                    <td>{{ trans('message.name') }}</td>
                    <td>{{ trans('message.email') }}</td>
                    <td>{{ trans('message.phone') }}</td>
                    <td>{{ trans('message.city') }}</td>
                    <td>{{ trans('message.language') }}</td>
                    <td colspan = 2>{{ trans('message.actions') }}</td>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $key => $contact)
                    <tr class="text-center">
                        <td>{{ $key = $key + 1 }}</td>
                        <td class="text-left">{{ $contact->name }}</td>
                        <td class="text-left">{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->city }}</td>
                        <td>{{ $contact->language }}</td>
                        <td>
                            <a href="{{ route('contacts.edit',$contact->id) }}" class="btn btn-primary">{{ trans('message.edit') }}</a>
                        </td>
                        <td>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">{{ trans('message.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <div>
    </div>
@endsection
