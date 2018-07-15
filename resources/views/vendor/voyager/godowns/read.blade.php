@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.'Godown')

@section('page_header')
    <h1 class="page-title"><i class="icon-warehouse"></i> {{ __('voyager::generic.viewing') }} Godown &nbsp;</h1>
    
    <a href="{{route('voyager.godowns.edit',$godown->id)}}" class="btn btn-info hoverable"><i class="icon-pencil-4 pr-2"></i>Edit</a>
    <a class="btn btn-danger hoverable" data-toggle="modal" data-target="#delete_Modal"><i class="icon-trash-empty pr-2"></i>Delete</a>
    <a href="{{route('voyager.godowns.index')}}" class="btn btn-yellow hoverable"><i class="icon-th-list pr-2"></i>Return to list</a>
    <a href="{{ route('voyager.purchases.create') }}" class="btn btn-success ">
        <i class="icon voyager-basket pr-2"></i>
        Purchase Item
    </a>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')

    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="pl-3"><b>{{ $godown->name }}</b></h3>
                <h5 class="pl-3 pt-3"><b>Address</b> : {{ $godown->address }}</h5>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card card-bordered">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Goods Item</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($allGoods)>0)
                                        @foreach($allGoods as $Good)
                                            <tr>
                                                <td>{{ $Good->name }}</td>
                                                <td>{{ $Good->quantity }} <small>{{ $Good->unit }}</small></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('javascript')
    
@stop
