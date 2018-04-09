@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{ url('/home')}}">View Group</a>
                    <hr>
                    <form class="form-control">
                        <div>
                            <label>Group Link</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>Group Name</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>Group Name</label>
                            <input type="file" name="" class="form-control">
                        </div>
                        <div>
                            <label>Group Description</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>Group Owner</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>Group Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div>
                            <label>Group Type</label>
                            <select class="form-control">
                                <option>Public</option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div>
                            <label>Group Tag/Keyword</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>InviteURL</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>Rating</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>Followers</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>DeviceToken</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>PlaceHolder1</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div>
                            <label>PlaceHolder2</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
