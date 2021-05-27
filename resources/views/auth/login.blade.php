@extends('layouts.main_auth')

@section('contents')
<form action="{{ route('login') }}" method="POST">

<section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Sign In</h2>
                        <p>Login to stay connected.</p>

                   

                           @csrf
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="login" id="login" required />
                                    <label class="form-label" for="email">Login</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password" required />
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>
                              
                              
                           </div>
                           <button type="submit" class="btn btn-primary">Sign In</button>
                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
