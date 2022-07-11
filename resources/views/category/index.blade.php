@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">CATEGORY</h4>
                <p class="card-category"> CATEGORY </p>
                <a href="{{route('category.create')}}">
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
                            @foreach($data as $no => $key)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    {{ $key->name }}
                                </td>
                                {{-- <td> <a href="{{route('posts.show', $key)}}">Lihat</a> </td> --}}
                                <td> <a href="{{route('category.edit', $key)}}">update</a> </td>
                                <td>
                                    <form action="{{route('category.destroy', $key)}}" method="post">
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
