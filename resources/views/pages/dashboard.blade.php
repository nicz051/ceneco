@extends('layouts.index')

@section('content')
           
    
        <div class="container" >
            <div class="row">
                <div class="col-xl-8">
                    <div class="header1" style="margin-top: 20px">
                        <table class="table table-striped">
                            <thead>
                                <tr>List of Accounts Due Today</tr>
                                <tr style="color: white">
                                    <td>Account Number</td>
                                    <td>Account Name</td>
                                    <td>Meter Number</td>
                                    <td>Address</td>
                                    <td>Type</td>
                                    <td>Contact Number</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="scrollable">
                        <table class="table table-striped" style="color: white">
                            <tbody>
                            @foreach($accounts as $account)
                                <tr>
                                    <td>{{$account->account_number}}</td>
                                    <td>{{$account->account_name}}</td>
                                    <td>{{$account->meter_number}}</td>
                                    <td>{{$account->address}}</td>
                                    <td>{{$account->type}}</td>
                                    <td>{{$account->contact_number}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                </div>
                <div class="col-xl-4" >
                    <div class="container" style="background color: rgb(192, 192, 192)">
                        <div class="row">
                            <div class="col-xl-12" >
                                <h5 style="margin-top: 20px">Notifications</h5>
                                <div class="alert alert-danger" role="alert">
                                    <div class="row vertical-align">
                                        <div class="col-xs-1 text-center">
                                            <i class="fa fa-exclamation-triangle fa-2x"></i> 
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Error:</strong> Unsuccessful
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
                                        <div class="col-md-6">
                                            <strong>Success:</strong> Reconnected
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
                                        <div class="col-md-6">
                                            <strong>Success:</strong> Reconnected
                                        </div>
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="header1"  style="margin-top:-10px">
                        <table class="table table-striped">
                            <thead>
                                <tr>List of Accounts to be Disconnected Today</tr>
                                <tr style="color: white">
                                    <td>Account Number</td>
                                    <td>Account Name</td>
                                    <td>Meter Number</td>
                                    <td>Address</td>
                                    <td>Type</td>
                                    <td>Contact Number</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="scrollable">
                        <table class="table table-striped" style="color: white">
                            <tbody>
                            @foreach($accounts1 as $account)
                                <tr>
                                    <td>{{$account->account_number}}</td>
                                    <td>{{$account->account_name}}</td>
                                    <td>{{$account->meter_number}}</td>
                                    <td>{{$account->address}}</td>
                                    <td>{{$account->type}}</td>
                                    <td>{{$account->contact_number}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>

        </div>
    <!-- </div> -->

        <!-- <div class="container" style="margin-left: 50px">
            <div class="row">
                <div class="col-md-8" style="background-color: red">
                    <div class="header1" style="margin-top:20px">
                        <table class="table table-striped">
                            <thead>
                                <tr>List of Accounts to be Disconnected Today</tr>
                                <tr style="color: white">
                                    <td>Account Number</td>
                                    <td>Account Name</td>
                                    <td>Meter Number</td>
                                    <td>Address</td>
                                    <td>Type</td>
                                    <td>Contact Number</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="scrollable">
                        <table class="table table-striped" style="color: white">
                            <tbody>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>gfgh</td>
                                    <td>1334</td>
                                    <td>fgdfg</td>
                                    <td>ghjx</td>
                                    <td>57686</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                    <div class="row vertical-align">
                        <div class="col-xs-1 text-center">
                            <i class="fa fa-exclamation-triangle fa-2x"></i> 
                        </div>
                        <div class="col-md-5">
                            <strong>Error:</strong> Unsuccessful
                        </div>
                    </div>
                </div>      
            </div>
        </div>  
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success" role="alert">
                    <div class="row vertical-align">
                        <div class="col-xs-1 text-center">
                            <i class="fa fa-check fa-2x"></i> 
                        </div>
                        <div class="col-md-5">
                            <strong>Success:</strong> Reconnected
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>     -->
@endsection