@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Member {{ $member->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/member') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/member/' . $member->id . '/edit') }}" title="Edit Member"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/member' . '/' . $member->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Member" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $member->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Name </th>
                                        <td> {{ $member->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Surname </th>
                                        <td> {{ $member->surname }} </td>
                                    </tr>
                                    <tr>
                                        <th> Phone </th>
                                        <td> {{ $member->phone }} </td>
                                    </tr>
                                    <tr>
                                        <th> Note </th>
                                        <td> {{ $member->note }} </td>
                                    </tr>
                                    <tr>
                                        <th> Role </th>
                                        <td> 
                                            @if($member->role == 1)
                                            <span class="badge badge-success">คนขาย</span>
                                            @elseif($member->role == 2)
                                            <span class="badge badge-warning">คนซื้อ</span>
                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
