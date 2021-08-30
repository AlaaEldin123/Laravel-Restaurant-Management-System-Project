<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container">

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Chef Create</h4>
                            <hr>
                            <form method="post" action="{{ url('/uploadchef') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" name="name" placeholder="Write a Name" required
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Speciality</label>
                                    <input class="form-control" type="text" name="speciality"
                                        placeholder="Write a Speciality" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="text-center card-title">Food Menu Tab</h4>
                    <div class=" table-responsive">
                        <table style="width: 100%" class="border table-hover">
                            <thead>
                                <tr class="table-danger">

                                    <th>Ched Name</th>
                                    <th>Speciality</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <hr>
                            <tbody>
                                @foreach ($data as $data)

                                    <tr>
                                        <th scope="row">{{ $data->name }}</th>
                                        <td>{{ $data->speciality }}</td>

                                        <td><img width="100px" height="100px" src="/chefimage/{{ $data->image }}"
                                                alt=""> </td>
                                        <td><a class="btn btn-success"
                                                href="{{ url('/updatechef', $data->id) }}">Update</a>
                                            <a class="btn btn-success"
                                                href="{{ url('/deletechef', $data->id) }}">Delete</a>
                                        </td>


                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('admin.adminscript')
</body>

</html>
