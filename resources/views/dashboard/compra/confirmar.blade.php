@extends('dashboard.master')

@section('content')

    <div class="card mt-4 mr-10 col-8" style="margin-left: 15%">
        <div class="card-header">
            <P>
            <p class="text-center"><strong> INVOICE </strong></p>
        </div>
        <div class="card-body col-6 m-6" style="margin-left: 25%">
            <label for="title">Name Client </label>
            <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $cliente->name) }}" disabled="disabled">
            <label for="title">Last Name </label>
            <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $cliente->lastname) }}" disabled="disabled">
            
            <label for="age">E-Mail</label>
            <input name="age" id="age" type="numeric" class="form-control" value="{{ old('age', $cliente->email) }}"disabled="disabled">
            
            <label for="address">Address </label>
            <input name="address" id="address" type="text" class="form-control" value="{{ old('address', $cliente->address) }}"disabled="disabled">

            <label for="title">Phone </label>
            <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $cliente->phone) }}" disabled="disabled">
            
    </div>
    <div class="card-header">
        <P>
        <p class="text-center"><strong>SHOPPING DETAILS</strong></p>
    </div>
    <div class="card-body"> 
    <div class="col-6 " style="margin-left: 25%">
        <div class="container mt-4 mr-4">
            <table class="table responsive-sm" style="text-align: center">
                <thead>
                    <tr>
                        
                        <th scope="col">Title of the book </th>
                        <th scope="col">Quantity </th>
                        <th scope="col">Price </th>
                        <th scope="col">Amount </th>
                        
                    </tr>
                </thead>
                    @foreach (Cart::getContent() as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>${{$item->price}}</td>
                        <td>${{$item->price*$item->quantity}}</td>
                        
                    </tr>
                    @endforeach
                <tfoot>
                    <th scope="col">Total to pay:</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                    <th scope="col">${{$total = Cart::getTotal()}}</th>
                </tfoot>
                
            </table>
            
               
        </div>
    </div>
    </div>
    <div class="card-header">
        <P>
        <p class="text-center"><strong>PAYMENT METHOD</strong></p>
    </div>
    <div class="card-body"> 
    <div class="col-6 " style="margin-left: 25%">
        <div class="container mt-4 mr-4">
            
            <form action="#" class="credit-card-div">
                <div class="panel panel-default" >
                 <div class="panel-heading">
                     
                      <div class="row ">
                              <div class="col-md-12">
                                  <input type="text" class="form-control" placeholder="Enter Card Number" />
                              </div>
                          </div>
                     <div class="row pt-2">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                  <span class="help-block text-muted small-font" > Expiry Month</span>
                                  <input type="text" class="form-control" placeholder="MM" />
                              </div>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                                  <span class="help-block text-muted small-font" >  Expiry Year</span>
                                  <input type="text" class="form-control" placeholder="YY" />
                              </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                                  <span class="help-block text-muted small-font" >  CCV</span>
                                  <input type="text" class="form-control" placeholder="CCV" />
                              </div>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="{{ asset('images/visa.jpg') }}" class="img-rounded" />
                         </div>
                          </div>
                     <div class="row pt-2">
                              <div class="col-md-12 pad-adjust">
                
                                  <input type="text" class="form-control" placeholder="Name On The Card" />
                              </div>
                          </div>
                     <div class="row">
                <div class="col-md-12 pad-adjust">
                    <div class="checkbox">
                    
                  </div>
                </div>
                     </div>
                       
                     
                                   </div>
                              </div>
                </form>
               
        </div>
    </div>
    <div>
        <div class="row ">
            <div class="col-6 " style="margin-left: 25%">
                <tr>
                    <div class="row pt-2 ml-4">
                        <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                            <a class="btn btn-warning btn-block" href="{{route('compra.store')}}"><i class="fa fa-plus"></i> PAY</a>
                        </div>
                    </div>
                    
                </tr>
            </div>
        </div>    
                                                
</form>
        
    
        
@endsection
