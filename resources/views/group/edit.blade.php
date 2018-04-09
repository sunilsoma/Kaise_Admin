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
                            <th>Group Name</th>
                            <th>Description</th>
                            <th>Owner</th>
                            <th>Category</th>
                            <th>Rating</th>
                            <th>Follower</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
