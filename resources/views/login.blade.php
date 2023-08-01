@extends("layout.master")
@section("title","Home")

@section("content")

<main class="form-signin w-25  m-auto">
  <form action="{{route('do.login')}}" method="post" name="frmLogin">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    @if(session()->has('message'))
    <div  class="alert alert-success">{{session()->get('message')}}</div>
    @endif
    <div class="form-floating mb-5">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary  py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>

@endsection