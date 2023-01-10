<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="row g-0">
        <div class="col-lg-8">
            <div class="p-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                <h6 class="mb-0 text-muted">3 items</h6>
                </div>
                <hr class="my-4">

                <div class="row mb-4 d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-muted">Shirt</h6>
                    <h6 class="text-black mb-0">Cotton T-shirt</h6>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" disabled min="0" name="quantity" value="1" type="number"
                    class="form-control bg-white text-center form-control-sm" />

                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                    </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0">€ {{$item1}}</h6>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                </div>
                </div>

                <hr class="my-4">

                <div class="row mb-4 d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-muted">Shirt</h6>
                    <h6 class="text-black mb-0">Cotton T-shirt</h6>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" disabled min="0" name="quantity" value="1" type="number"
                    class="form-control bg-white text-center form-control-sm" />

                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                    </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0">€ {{$item2}}</h6>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                </div>
                </div>

                <hr class="my-4">

                <div class="row mb-4 d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-muted">Shirt</h6>
                    <h6 class="text-black mb-0">Cotton T-shirt</h6>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" disabled min="0" name="quantity" value="1" type="number"
                    class="form-control bg-white text-center form-control-sm" />

                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                    </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0">€ {{$item3}}</h6>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                </div>
                </div>

                <hr class="my-4">

                <div class="pt-5">
                <h6 class="mb-0"><a href="#!" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-4 bg-grey">
            <div class="p-5">
                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4">
                <h5 class="text-uppercase">items 3</h5>
                <h5>€ {{$total}}</h5>
                </div>

                <div class="d-flex justify-content-between mb-4">
                <h5 class="text-uppercase mb-3">Shipping</h5>
                <h5>€ 5</h5>
                </div>

                @if($discount<=0)
                <h6 class="text-uppercase mb-1">Give code</h6>
                <div class="mb-4">
                <div class="form-outline">
                    <form action="{{route('redeem')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-9">
                                <input type="text" name="voucher"  @if($voucher) value="{{$voucher->name}}" @endif id="form3Examplea2" class="form-control form-control text-uppercase" />
                            </div>
                            <input type="submit" class="btn btn-outline-dark col-3" value="Redeem">
                            @if($message) <p class="text-sm text-danger">{{$message}}</p> @endif
                            <!-- <a href="{{route('cart.get', ['voucher'=>'SF35'])}}">redeem</a> -->
                        </div>
                    </form>
                </div>
                </div>
                @endif

                @if($discount>0)
                    <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase mb-3">Discount <b> {{$disparcent}}% </b> </h5>
                    <h5>- € {{$discount}}</h5>
                    </div>
                @endif

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-5">
                <h5 class="text-uppercase">Total price</h5>
                <h5>€ {{$total+5-$discount}}</h5>
                </div>

                @if($voucher && $discount)
                <form action="{{route('cart.pay')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{$user->id}}" >
                     <input type="hidden" name="voucher_id" value="{{$voucher->id}}" > 
                    <input type="hidden" name="amount" value="{{$discount}}">

                    <button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Proceed to Pay</button>
                </form>
                @else
                <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Proceed to Pay</button>
                @endif

            </div>
        </div>
    </div>
</div>