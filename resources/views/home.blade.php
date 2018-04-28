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
                        <thead>
                            <th>Group Link</th>
                            <th>Group Name</th>
                            <th>Description</th>
                            <th>Owner</th>
                            <th>Category</th>
                            <th>Rating</th>
                            <th>Follower</th>
                            <th>Status</th>
                            <th class="icon"></th>
                        </thead>
                        <tbody>
                            @foreach($groups as $key=> $group)
                            <tr>
                                <td>{{ $group->admin_group_link}}</td>
                                <td>{{ $group->admin_group_name}}</td>
                                <td>{{ $group->admin_group_description}}</td>
                                <td>{{ $group->admin_group_owner}}</td>
                                <td>{{ $group->admin_category_name}}</td>
                                <td><?php
$review=(object)['rate'=>$group->admin_group_rating];
for($i=0; $i<5; ++$i){
    echo '<i class="fa fa-star',($review->rate<=$i?'-o':''),'" aria-hidden="true"></i>';
    echo "\n";
} ?></td>
                                <td>{{ $group->admin_group_follower}}</td>
                                <td>{{ $group->admin_group_status}}</td>
                                
                                <td><a class="btn btn-primary" href="{{ url('/group/edit/'.$group->id)}}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;<a class="btn btn-primary" href="{{ url('/group/detail/'.$group->id)}}"><i class="fas fa-info"></i></a></td>
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
