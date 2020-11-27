@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3 offset-sm-4">
            <h2>Create a contact</h2>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name:</label>
                        <input type="text" class="form-control" name="name" required />
                    </div>
                    <div class="form-group">
                        <label for="country">Company:</label>
                        <input type="text" class="form-control" name="company" required />
                    </div>
                    <div class="form-group">
                        <label for="city">Phone:</label>
                        <input type="text" class="form-control" name="phone" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" required />
                    </div>

                    {{-- <div class="form-group">
                        <label for="job_title">Note:</label>
                        <input type="text" class="form-control" name="note" />
                    </div>
                    <div class="form-group">
                        <label for="avatar">Image:</label>
                        <input type="file" class="form-control" name="avatar" />
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Add contact</button>
                </form>

            </div>
        </div>
    </div>
@endsection
