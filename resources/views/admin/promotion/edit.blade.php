@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.promotion.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Promotion Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label> Title</label>
                          <input type="text" class="form-control"  name="title" value="{{ $promotion->title }}">
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" name="text" value="{{ $promotion->text }}">
                          </div>
                          <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{ $promotion->link }}">
                          </div>
                          <div class="form-group">
                            <label>Url</label>
                            <input type="text" class="form-control" name="url" value="{{ $promotion->url }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
