@extends('front.layout.app')
@section('title','Register')
@section('content')
<div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
    <form class="form" method="POST" action="{{ route('new_user') }}">
        <div class="form-items">
            <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            {{-- <input type="hidden" name="page" value="register" > --}}
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
    <div class="d-flex justify-content-center gap-2">
        <span>already have an account?</span><a class="link" href="{{ route('login') }}"> login</a>
    </div>
</div>


</div>
</div>
@endsection