@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container">
        <div class="card ">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
            </div>
            <div class="card-body ">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="username">judul</label>
                        <div class="col-sm-7">
                            <input class="form-control" autoComplete='off' name="name" id="username" type="text" placeholder="judul" required />
                            @error('name')
                            <div class="text-danger"> {{$message}} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary"> submit </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
