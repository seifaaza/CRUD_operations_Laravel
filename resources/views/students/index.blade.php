
<div class="container w-75">
    <h1 class="alert alert-info text-center mt-5">Students list</h1>
    <a href="{{url('/add')}}" class="btn btn-success">Add student</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <a href="{{url('/show', $item->id)}}" class="btn btn-warning">Show</a>
                    <a href="{{url('/edit', $item->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('/delete', $item->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
