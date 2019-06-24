@extends('user.layouts.masterTwo')
@section('content')
<!-- Login Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Sign In') }}
                      </button>

                      @if (Route::has('password.request'))
                          <a style="color: red;" data-toggle="modal" class="btn btn-link" href="{{ route('password.request') }}" data-target="#exampleResetPassWordModal" data-dismiss="modal">{{ __('Forgot Your Password?') }}</a>
                      @endif
                  </div>
              </div>
              <br>
               <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Continue with</label>

                  <div class="col-md-6">
                      <a type="submit" href="#" class="btn btn-myDanger"><i class="icon-google"></i>
                          {{ __('Gmail') }}
                      </a>
                      OR
                        <a type="submit" href="#" class="btn btn-myPrimary"><i class="icon-facebook"></i>
                          {{ __('Facebook') }}
                      </a>
                  </div>
              </div>
              <center><div class="myText" style="color: black;">Don't have an account?<a style="color: red;" href="{{ route('register') }}" data-toggle="modal" data-target="#exampleRegistrationModal" data-dismiss="modal"> Sign Up </a>from here.</div></center>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- login model end -->


<!-- reset pass model -->
<div class="modal fade" id="exampleResetPassWordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end reset pass model -->


<!-- registration model -->
<div class="modal fade" id="exampleRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Sign Up') }}
                    </button>
                    <div style="margin-left: -100px; color: black;">Already have an account?<a style="color: red;" href="{{ route('register') }}" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal"> Sign In </a>from here.</div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end registration model -->
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset($blogPost->photo)}}');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">{{$blogPost->title}}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

 <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="bg-white property-body border-bottom border-left border-right" style="height: 780px;">
              <h2 class="h4 text-black">Description on {{$blogPost->title}}</h2>
              <p>{{$blogPost->description}}</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Others Blog Post</h3>
            @foreach($blogPosts as $blogPost)
            <div class="bg-white widget border rounded" style="padding: 7px;height: 76px;">
            <a href="{{route('singleBlog',[$blogPost->id])}}">
              <h5>{{$blogPost->title}}</h5>
              <p>{{Str::words($blogPost->description,4,' ....')}}</p>
            </a>
            </div>
            @endforeach
            </div>
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Why blog is useful?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>



        
        <div class="row" data-aos="fade-up">
          <div class="col-12 d-flex justify-content-center pt-4">
            
          </div>  
        </div>
       
      </div>
    </div>

@endsection