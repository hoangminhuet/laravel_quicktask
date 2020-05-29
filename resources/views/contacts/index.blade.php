@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="float-lg-left"><strong>{{ trans('message.employee_manage') }}</strong></h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary float-lg-right">{{ trans('message.add_employee') }}</a>
                </div>
            </div>

            @if (session()->get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif

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
            {{ $contacts->render() }}
        <div>
    </div>
@endsection
