@extends('layouts.index')

@section('content')
    

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <div class="row vertical-align">
                        <div class="col-xs-1 text-center">
                            <i class="fa fa-exclamation-triangle fa-2x"></i> 
                        </div>
                        <div class="col-md-12">
                            <strong>Failed:</strong> Meter No. 1234563 reconnection is unsuccessful.
                        </div>
                    </div>
                </div>      
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <div class="row vertical-align">
                        <div class="col-xs-1 text-center">
                            <i class="fa fa-check fa-2x"></i> 
                        </div>
                        <div class="col-md-12">
                            <strong>Success:</strong> Meter No. 1234561 reconnection is successful
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <div class="row vertical-align">
                        <div class="col-xs-1 text-center">
                            <i class="fa fa-check fa-2x"></i> 
                        </div>
                        <div class="col-md-12">
                            <strong>Success:</strong> Meter No. 1234560 disconnection is successful
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>







@endsection