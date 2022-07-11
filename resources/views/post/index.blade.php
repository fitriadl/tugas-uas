@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">POST</h4>
                <p class="card-category">POST</p>
                <a href="{{route('posts.create')}}"> 
                    <button> create </button> 
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                {{-- Country --}}
                            </th>
                            <th>
                                {{-- City --}}
                            </th>
                            <th>
                                {{-- Salary --}}
                            </th>
                        </thead>
                        <tbody>
                            @foreach($post as $no => $key)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    {{ $key->title }}
                                </td>
                                <td> <a href="{{route('posts.show', $key)}}">Lihat</a> </td>
                                <td> <a href="{{route('posts.edit', $key)}}">update</a> </td>

                                <td>
                                    <form action="{{route('posts.destroy', $key)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"> hapus </button>
                                    </form>
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
