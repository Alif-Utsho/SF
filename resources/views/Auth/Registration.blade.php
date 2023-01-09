@include('Layout')
@section('content')
<section class="h-100 py-3" style="background-color: #d2c9ff;">
    <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">

                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                        <form class="px-md-2" action="{{route('registration.post')}}" method="POST">

                        {{csrf_field()}}

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" />
                                @error('name')
                                    <p class="text-danger text-sm"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <div class="form-outline datepicker">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}" />
                                    @error('email')
                                        <p class="text-danger text-sm"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <select class="form-select" name="type" selected="{{old('type')}}">
                                    <option  selected disabled>User Type</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Premium">Premium</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <div class="form-outline datepicker">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" />
                                    @error('password')
                                        <p class="text-danger text-sm"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <p class="text-sm">Already Registered? <a href="{{route('login.get')}}">Login here</a> </p>
                            <button type="submit" class="btn btn-success btn-lg mb-1 float-end">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>