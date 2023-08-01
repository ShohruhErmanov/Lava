@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4> About create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control"  name="title">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                        <div class="form-group">
                          <label>Text</label>
                          <input type="text" class="form-control" name="text">
                        </div>

                          <div class="form-group">
                            <label>Span</label>
                            <input type="text" class="form-control" name="span">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
