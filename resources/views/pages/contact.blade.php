@extends('layouts.app')

@section('content')
    <div class="card mt-3 pl-2 pr-2">

        <div class="card-title">

            <h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner.</p>

        </div>

        <div class="card-body">

            <form action="{{route('contact.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection