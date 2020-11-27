@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <a style="margin: 20px; " href="{{ route('contacts.create') }}" class="btn btn-primary">New
                    contact</a>
            <div class="col-sm-12">

                @if (session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            @if(!$contacts->isEmpty())
                {{-- <form action="" class="form-inline pull-right">
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Search.." class="form-control"/>
                        <input type="submit" class="btn btn-primary" value="Search"/>
                    </div>
                </form> --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td colspan=2>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }} </td>
                                <td>{{ $contact->company }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="{{ route('contacts.destroy', $contact->id) }}" onclick="return confirm('Are you sure you want to DELETE?')" class="btn btn-danger">Delete</a>
                                    </form>
                                </td>
                                <td><td>

                            </tr>

                        @endforeach
                    </tbody>


                </table>
                {{$contacts->links("pagination::bootstrap-4")}}
        </div>
    </div>

            @else
            <script>window.location = "/contacts/create";</script>
            @endif


        @endsection
