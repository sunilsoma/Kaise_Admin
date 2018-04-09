@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{ url('/group/create')}}">Link (Create Group)</a>
                    <hr>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Group Name</td>
                                <td>{{ $group->admin_group_name}}</td>
                            </tr>
                            <tr>
                                <td>Group Description</td>
                                <td>{{ $group->admin_group_description}}</td>
                            </tr>
                            <tr>
                                <td>Group Image</td>
                                <td><img src="{{ $group->admin_group_image}}"></td>
                            </tr>
                            <tr>
                                <td>Group Owner</td>
                                <td>{{ $group->admin_group_owner}}</td>
                            </tr>
                            <tr>
                                <td>Group Category Name</td>
                                <td>{{ $group->admin_category_name}}</td>
                            </tr>
                            <tr>
                                <td>Group Type</td>
                                <td>{{ $group->admin_group_type}}</td>
                            </tr>
                            <tr>
                                <td>Group Tag Words</td>
                                <td>{{ $group->admin_group_tag_words}}</td>
                            </tr>
                            <tr>
                                <td>Group Invite Url</td>
                                <td>{{ $group->admin_group_invite_url}}</td>
                            </tr>
                            <tr>
                                <td>Group Name</td>
                                <td><?php
$review=(object)['rate'=>$group->admin_group_rating];
for($i=0; $i<5; ++$i){
    echo '<i class="fa fa-star',($review->rate<=$i?'-o':''),'" aria-hidden="true"></i>';
    echo "\n";
} ?></td>
                            </tr>
                            <tr>
                                <td>Group Follower</td>
                                <td>{{ $group->admin_group_follower}}</td>
                            </tr>
                            <tr>
                                <td>Group PlaceHolder 1</td>
                                <td>{{ $group->admin_group_place_holder_1}}</td>
                            </tr>
                            <tr>
                                <td>Group PlaceHolder 2</td>
                                <td>{{ $group->admin_group_place_holder_2}}</td>
                            </tr>
                            <tr>
                                <td>Group Status</td>
                                <td>{{ $group->admin_group_status}}</td>
                            </tr>
                            <tr>
                                <td>Group Counter Read</td>
                                <td>{{ $group->admin_group_counter_read}}</td>
                            </tr>
                            <tr>
                                <td>Group Counter Modify</td>
                                <td>{{ $group->admin_group_counter_modify}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
