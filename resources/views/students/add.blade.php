<div class="container w-75">
    <h1 class="alert alert-success text-center mt-5">Add student</h1>
    <a href="{{url('/')}}" class="btn btn-dark">Back</a>
    <form action="{{url('/store')}}" method="post" class="mt-5">
        @csrf
        <input type="text" name="name" placeholder="Name" class="form-control"><br>
        <input type="text" name="email" placeholder="Email" class="form-control"><br>
        <input type="text" name="phone" placeholder="Phone" class="form-control"><br>
        <button class="btn btn-success form-control">Save</button>
    </form>
</div>
