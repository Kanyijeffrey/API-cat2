@extends('jeffrey.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Welcome</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <a href="/students" class="btn btn-md btn-dark">Add a new student</a>
                        </div>
                        <div class="col-md-6">
                            <a href="/fees" class="btn btn-md btn-dark">Add a new feepayment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
