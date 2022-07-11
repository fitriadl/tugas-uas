@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container">
        <div class="card ">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('POSTS') }}</h4>
                <p class="card-category">{{ __('POSTS') }}</p>
            </div>
            <div class="card-body ">
                <form action="{{route('posts.update', $post)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="username">judul</label>
                        <div class="col-sm-7">
                            <input class="form-control" autoComplete='off' name="title" id="username" type="text" placeholder="judul" value="{{$post->title}}" required />
                            @error('name')
                            <div class="text-danger"> {{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="username">kategori</label>
                        <div class="col-sm-7">

                            <select class="form-control" name="kategori" id="exampleFormControlSelect1">
                                @foreach($cat as $key )
                                    
                                <option value="{{$key->id}}" >{{$key->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <label class="col-sm-2 col-form-label" for="email">DESC</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" id="desc" name="desc" rows="3"> {{$post->desc}} </textarea>
                            @error('email')
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
