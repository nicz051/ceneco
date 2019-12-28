@extends('layouts.index')

@section('content')
<div id="searchcontainer" class="container" style="text-align: right">
    <input type="text" id="search" placeholder="Search Disconnected Accounts" onkeyup="searchFun()" style="margin-top:20px">
</div>

<div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-12"  style="text-align:center">
                <table id= "disaccountstable" class="table table-striped" style="background-color: rgb(192, 192, 192)">
                    <thead>
                        <tr>
                          <!-- <td><strong>Account Number</strong></td>
                          <td><strong>Account Name</strong></td>
                          <td><strong>Meter Number</strong></td>
                          <td><strong>Address</strong></td>
                          <td><strong>Due Date</strong></td>
                          <td><strong>Disconnection Date-Time</strong></td> -->
                          <th>Account Number</th>
                          <th>Account Name</th>
                          <th>Meter Number</th>
                          <th>Address</th>
                          <th>Due Date</th>
                          <th>Disconnection Date-Time</th>
                        </tr>
                    </thead>
                    <tbody style="color: white">
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{$account->account_number}}</td>
                            <td>{{$account->account_name}}</td>
                            <td>{{$account->meter_number}}</td>
                            <td>{{$account->address}}</td>
                            <td>{{$account->type}}</td>
                            <td>{{$account->credit_balance}}</td>
                        </tr>
                    @endforeach
                        <!-- <tr>
                           <td>1396012</td>
                           <td>Batulan, Shairra</td>
                           <td>1234562</td>
                           <td>Tangub, Bacolod City</td>
                           <td>2019-10-24</td>
                           <td>2019-10-27 01:15:24</td>
                        </tr>
                        <tr>
                           <td>1396015</td>
                           <td>Cimatu, Bern</td>
                           <td>1234563</td>
                           <td>Villamonte, Bacolod City</td>
                           <td>2019-10-25</td>
                           <td>2019-10-29 01:15:24</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
</div>

<script>
    const searchFun = () =>{
        let filter = document.getElementById('search').value.toUpperCase();
        let disaccountstable = document.getElementById('disaccountstable');
        let tr= disaccountstable.getElementsByTagName('tr');

        
        for (var i=0; i<tr.length; i++){
            let td =tr[i];

            if (td){
                    for (k=0; k<6; k++){
                        let tx=td.getElementsByTagName('td')[k];

                        if (tx){
                            let textvalue = td.textContent || td.innerHTML;

                            if (textvalue.toUpperCase().indexOf(filter) > -1){
                                tr[i].style.display = "";
                            }else{
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            }
        }
</script>
@endsection