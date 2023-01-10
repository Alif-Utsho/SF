@include('layout')
@section('content')

<div class="row">
    <nav class="navbar shadow-lg px-5">
        <div class="container-fluid col-11">
            <h6 class="navbar-brand my-auto">SF Group</h6>
            <form class="d-flex" action="{{route('logout')}}" method="POST">
                {{csrf_field()}}
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>
</div>
<section class="h-100 h-custom" style="background-color: #d2c9ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <x-cart voucher={{$voucher}}/>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>