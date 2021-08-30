<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body><br>
    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container">

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Default form</h4>
                            <hr>
                            <form method="post" action="{{ url('/uploadfood') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" name="title" placeholder="Write a Title" required
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input class="form-control" type="text" name="price" placeholder="Write a Price"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripition</label>
                                    <input type="text" class="form-control" name="descripition"
                                        placeholder="Write a Descripition" required>
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
        <div class="card">
            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="text-center card-title">Food Menu Tab</h4>
                    <div class=" table-responsive">
                        <table style="width: 100%" class="table-hover">
                            <thead>
                                <tr>
                                <tr>
                                    <th>Food Name</th>
                                    <th>Price</th>
                                    <th> Desciription</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)

                                    <tr>
                                        <th scope="row">{{ $data->title }}</th>
                                        <td>${{ $data->price }}</td>
                                        <td>{{ $data->descripition }}</td>
                                        <td><img width="120px;" height="120px;" src="/foodimage/{{ $data->image }}"
                                                alt=""></td>
                                        <td><a class="btn btn-danger btn-sm"
                                                href="{{ url('/deletemenu', $data->id) }}">Delete</a>

                                            <a class="btn btn-info btn-sm"
                                                href="{{ url('/updateview', $data->id) }}">Update</a>
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
