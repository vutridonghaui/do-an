
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Order</h1>
            <h3>Order ID: {{$detailOrder->first()->transaction_id}} </h3>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <h2 class="customer_info" style="text-align: center; background: lightskyblue">Customer Information</h2>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary"  style="background: #0da5c0">
                                    <th  width="10%">Customer Id</th>
                                    <th width="20%">Customer Name</th>
                                    <th width="20%">Email</th>
                                    <th width="20%" >Phone</th>
                                    <th width="30%">Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$detailOrder->first()->customer_id}}</td>
                                        <td>{{$detailOrder->first()->customer_name}}</td>
                                        <td>{{$detailOrder->first()->customer_email}}</td>
                                        <td>{{$detailOrder->first()->customer_phone}}</td>
                                        <td>{{$detailOrder->first()->address}}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <hr>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <h2 class="customer_info" style="text-align: center; background: lightskyblue">Order Information</h2>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary"  style="background: #0da5c0">
                                    <th width="10%">Product Id</th>
                                    <th width="20%">Product Name</th>
                                    <th width="15%" >Price</th>
                                    <th width="10%">Quantity</th>
                                    <th width="10%">Color</th>
                                    <th width="10%">Size</th>
                                    <th width="15%">Total Price</th>
                                    <th width="30 %">Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($detailOrder as $detail)
                                    <tr>
                                        <td>{{$detail->product_id}}</td>
                                        <td>{{$detail->product_name}}</td>
                                        <td>${{$detail->amount / $detail->qty}}</td>
                                        <td>{{$detail->qty}}</td>
                                        <td>{{$detail->color}}</td>
                                        <td>{{$detail->size}}</td>
                                        <td>${{$detail->amount}}</td>
                                        <td>{{$detail->address}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6"><p style="text-align: right"><b>Total price order: ${{$detailOrder->first()->total_price}}</b></p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <style>
        th,td {
            text-align: center;
        }
    </style>
