<div class="container w-75">
    <h1 class="alert alert-primary text-center mt-5">Edit student</h1>
    <a href="{{url('/')}}" class="btn btn-dark">Back</a>
    <form action="{{url('/update', $student->id)}}" method="post" class="mt-5">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Name" value="{{$student->name}}" class="form-control"><br>
        <input type="text" name="email" placeholder="Email" value="{{$student->email}}" class="form-control"><br>
        <input type="text" name="phone" placeholder="Phone" value="{{$student->phone}}" class="form-control"><br>
        <button class="btn btn-success form-control">Save</button>
    </form>
</div>
