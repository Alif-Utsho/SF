@extends('Layout')
<!-- @section('title')
Admin Dashboard
@endsection -->


@section('content')

<div class="row vh-100">

        <!-- Sidebar -->
        <div class="flex-shrink-0 vh-100 bg-dark shadow-sm" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 p-2 link-dark text-decoration-none border-bottom">
                <span class="fs-5 fw-bold btn col-12 text-white">
                    SF Group
                </span>
            </a>
            <ul class="list-unstyled ps-0 ms-4">
                <li class="mb-1">
                    <a class="btn align-items-center rounded text-white" href="{{route('admin.dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i> &nbsp;
                        Promo codes
                    </a>
                </li>
            </ul>
        </div>


        <div class="col" style="margin-right:-15px;">
            
            <!-- Navbar -->
            <div>
                <div class="row">
                    <nav class="navbar navbar-light shadow"  style="background-color: #d2c9ff;">
                        <div class="container-fluid">
                            <h6 class="navbar-brand my-auto">Admin Dashboard</h6>
                            <form class="d-flex me-4" action="{{route('logout')}}" method="POST">
                                {{csrf_field()}}
                                <button class="btn btn-danger" type="submit">Logout</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            

            <!-- Dashboard -->
            <div class="row container">
                <div class="row rounded-start bg-white border-primary mx-auto p-4 mt-4" style="border-left-style: solid; border-left-width: 3px;">

                <div>
                    <h3 class="p-2 border-primary border-bottom border-primary pb-4">Promo codes 
                        <span class="text-sm float-end"> 
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add New
                            </button>

                            <!-- Add Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header" style="background-color: #d2c9ff;">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Promo Code</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('add.promo')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <h6 for="exampleFormControlInput1" class="form-label">Promo Code</h6>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="codename">
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <h6 for="exampleFormControlInput1" class="form-label">Parcent </h6>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="parcent">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <h6 for="exampleFormControlInput1" class="form-label">Total Amount</h6>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="amount">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Add Promo</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </span> 
                    </h3>
                    
                    <div class="row mx-auto pt-4">

                        @foreach($vouchers as $voucher)
                        
                            <div class="card col-4 m-2" style="width:23rem; height:9rem">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="my-auto col-6">
                                            <h3 class="fw-bold">{{$voucher['name']}}</h3>
                                            <p class="my-0">Total amount <b>{{$voucher['amount']}}</b> </p>
                                            <h6>Remaining <b> {{ $due[$voucher['name']] }} </b></h6>
                                        </div>
                                        
                                        <div class="col-5 ms-auto">
                                            <h2 
                                                @if($voucher['status']) class="ms-3 my-auto p-2 bg-primary rounded rounded-circle text-white text-center"
                                                @else class="ms-3 my-auto p-2 bg-secondary rounded rounded-circle text-white text-center" @endif
                                                >
                                                {{$voucher['parcent']}}%
                                            </h2>
                                            
                                            <a  href="/codechange/{{$voucher['id']}}"
                                                @if($voucher['status']) class="btn btn-sm btn-outline-danger mt-4 float-end"
                                                @else class="btn btn-sm btn-outline-primary mt-4 float-end" @endif
                                                > 
                                                @if($voucher['status']) Deactivate @else Activate @endif
                                            </a>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>

            </div>
        </div>
        

</div>

@endsection