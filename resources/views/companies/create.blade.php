@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add company:</div>
                        <div class="card-body">
                            <form action="{{ route('company.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Name: </label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Email: </label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    @error('logo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Logo: </label>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                                <div class="form-group">
                                    @error('website')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Website: </label>
                                    <input type="text" name="website" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                                <div class="form-group row" style="float: right; margin-right:2px;">
                                    <a href="/company" class="btn btn-primary">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
