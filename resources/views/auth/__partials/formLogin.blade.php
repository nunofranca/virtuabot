<span class="mask bg-gradient-dark opacity-6"></span>
<div class="container mt-12">
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto mt-8">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="d-flex justify-content-center  mt-n4 mx-3 z-index-2">
                    <img class="m-0 rounded-2" src="{{mix('images/auth/virtuabot.png')}}" width="30%">
                </div>


                <div class="card-body">
                    <form role="form" class="text-start" method="post" action="{{route('login')}}">
                        @csrf
                        <div class="input-group input-group-outline my-3">

                            <input placeholder="Email" type="email" id="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            {{--                            <label for="password" class="form-label">Password</label>--}}
                            <input placeholder="Senha"  type="password" id="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-check form-switch d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-success w-100 my-4 mb-2 text-white">Login</button>
                        </div>
                        <p class="mt-4 text-sm text-center">
                            Esqueceu sua senha?
                            <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Clique
                                aqui</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
