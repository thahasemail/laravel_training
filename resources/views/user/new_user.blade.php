@extends("layout.master")
@section("title","Home")

@section("content")

<main>
    <h2 class="display-6 text-left mb-4">New User</h2>
    <form action="{{route('user.save')}}" method="post" name="frmNewUser" >
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Name </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
        </div>        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password </label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth </label>
            <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
           <button class="btn btn-primary">Save</button>
           <button class="btn btn-info" type="reset">Reset</button>
        </div>

    </form>

</main>

@endsection