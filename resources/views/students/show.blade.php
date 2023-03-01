<div class="container w-75">
    <h1 class="alert alert-warning text-center mt-5">Students list</h1>
    <a href="/" class="btn btn-dark">Back</a>
    <div class="mt-5">
        <div class="card mt-2" >
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$student->name}}</li>
              <li class="list-group-item">{{$student->email}}</li>
              <li class="list-group-item">{{$student->phone}}</li>
            </ul>
          </div>
    </div>
</div>
