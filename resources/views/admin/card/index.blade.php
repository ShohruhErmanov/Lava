@extends('layouts.admin')
@section('title')
    Card
@endsection
@section('content')
    @if (session('seccess'))
        <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('seccess') }}
            </div>
        </div>
    @endif


    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0 ">
                    <h2>Card Table</h2>
                    <div class="card-header-form mt-3 ">
                       <a href="{{ route('admin.card.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>


            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>T/R</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Text</th>
                                <th>Number</th>
                                <th>Button</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cards as $card)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $card->title }}</td>
                                    <td>
                                        <img src="/images/{{ $card->image }}" alt="" width="100">
                                    </td>
                                    <td>{{ $card->text }}</td>
                                    <td>{{ $card->number }}</td>
                                    <td>{{ $card->btn }}</td>
                                    <td class="d-flex ">
                                        <a href="#!"
                                            class="btn btn-warning ">Show</a>
                                        <a href="{{ route('admin.card.edit', $card->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.card.destroy', $card->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger "
                                                onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
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
@endsection
