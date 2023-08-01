@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.social.store') }}" method="POST">
                        @csrf
                      <div class="card-header">
                        <h4> Social create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Icon</label>
                          <input type="text" class="form-control"  name="icon">
                        </div>
                        <div class="form-group">
                            <label>url</label>
                            <input type="text" class="form-control" name="url">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
