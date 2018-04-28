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

                    @if( count( $errors ) > 0 )
                    @foreach (@$errors->all() as $error)
                        <div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                    @endif
                    <a class="btn btn-primary" href="{{ url('/home')}}">View Group</a>
                    <hr>
                    <form enctype="multipart/form-data" class="form-control" method="POST" action="{{ route('group_store') }}">
                         {{ csrf_field() }}
                        <div>
                            <label>Group Link</label>
                            <input type="text" name="admin_group_link" class="form-control">
                        </div>
                        <div>
                            <label>Group Name</label>
                            <input type="text" name="admin_group_name" class="form-control">
                        </div>
                        <div>
                            <label>Group Image</label>
                            <input type="file" name="admin_group_image" class="form-control">
                        </div>
                        <div>
                            <label>Group Description</label>
                            <input type="text" name="admin_group_description" class="form-control">
                        </div>
                        <div>
                            <label>Group Owner</label>
                            <input type="text" name="admin_group_owner" class="form-control">
                        </div>
                        <div>
                            <label>Group Category</label>
                            <select class="form-control" name="admin_group_categories_id">
                                <option value="">Select</option>
                                @foreach($group_category as $key=>$value)
                                <option value="{{$value->id}}">{{$value->admin_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Group Type</label>
                            <select class="form-control" name="admin_group_type">
                                <option value="">Select</option>
                                <option value="public">Public</option>
                                <option value="private">Private</option>
                            </select>
                        </div>
                        <div>
                            <label>Group Tag/Keyword</label>
                            <input type="text" name="admin_group_tag_words" class="form-control">
                        </div>
                        <div>
                            <label>InviteURL</label>
                            <input type="text" name="admin_group_invite_url" class="form-control">
                        </div>
                        <div>
                            <label>Rating</label>
                            <select class="form-control" name="admin_group_rating">
                                <option value="">Select</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Star</option>
                                <option value="3">3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
                            </select>
                        </div>
                        <div>
                            <label>Followers</label>
                            <input type="number" name="admin_group_follower" class="form-control">
                        </div>
                        <div>
                            <label>DeviceToken</label>
                            <input type="text" name="device_token" class="form-control">
                        </div>
                        <div>
                            <label>PlaceHolder1</label>
                            <input type="text" name="admin_group_place_holder_1" class="form-control">
                        </div>
                        <div>
                            <label>PlaceHolder2</label>
                            <input type="text" name="admin_group_place_holder_2" class="form-control">
                        </div>
                        <div class="clear-fix"></div>
                        <br>
                        <div>
                            <label></label>
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
