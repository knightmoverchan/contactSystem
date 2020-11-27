@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3 offset-sm-4">
            <h2>Edit Contact</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="first_name">Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $contact->name }} />
                </div>

                <div class="form-group">
                    <label for="country">Company:</label>
                    <input type="text" class="form-control" name="company" value={{ $contact->company }} />
                </div>

                <div class="form-group">
                    <label for="city">Phone:</label>
                    <input type="text" class="form-control" name="phone" value={{ $contact->phone }} />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={{ $contact->email }} />
                </div>

                @if ($contact->notes != '')
                    <div class="form-group">
                        <label for="job_title">Notes:</label>
                        <input type="text" class="form-control" name="notes" value={{ $contact->notes }} />
                    </div>
                @endif
                @if ($contact->avatar != '')
                <div class="form-group">
                    <label for="avatar">Image:</label>
                    <input type="file" class="form-control" name="avatar" value="{{ $contact->avatar }}" />
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
