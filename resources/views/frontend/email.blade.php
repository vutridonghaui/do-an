<div id="wrap-inner">
    <div id="khach-hang">
        <h3>Your personal information</h3>
        <p>
            <span class="info">Customer: </span>
            {{ $info['fullname'] }}
            {{--{{ $info['middlename'] }}
            {{ $info['lastname'] }}--}}
        </p>
        <p>
            <span class="info">Email: </span>
            {{ $info['email'] }}
        </p>
        <p>
            <span class="info">Phone number: </span>
            {{ $info['telephone'] }}
        </p>
        <p>
            <span class="info">Address: </span>
            {{ $info['city'] /*- $info['street']*/ }}
        </p>
    </div>
    <div id="hoa-don">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <h2 class="customer_info" style="text-align: center; background: lightskyblue">Order Information</h2>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th width="10%">Product Id</th>
                                        <th width="15%">Product Name</th>
                                        <th width="10%" >Price</th>
                                        <th width="10%">Quantity</th>
                                        <th width="10%">Color</th>
                                        <th width="10%">Size</th>
                                        <th width="15%">Total Price</th>
                                        <th width="20 %">Address</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($detailOrder as $detail)
                                        <tr>
                                            <td style="text-align: center">{{$detail->product_id}}</td>
                                            <td style="text-align: center">{{$detail->product_name}}</td>
                                            <td style="text-align: center">${{$detail->amount / $detail->qty}}</td>
                                            <td style="text-align: center">{{$detail->qty}}</td>
                                            <td style="text-align: center"> {{$detail->color}}</td>
                                            <td style="text-align: center">{{$detail->size}}</td>
                                            <td style="text-align: center">${{$detail->amount}}</td>
                                            <td style="text-align: center">{{$detail->address}}</td>
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
    </div>
    <div id="xac-nhan">
        <br>
        <p align="justify">
            <b>Your order has been successfully placed! </b><br />
            • Your products will be delivered to the Address listed in our customer information section after 2 to 3 days from this time..<br />
            •  Delivery staff will contact you via phone number 24 hours before delivery.<br />
            <b><br />Thank you for using Our Company's Products! </b>
        </p>
    </div>
</div>
