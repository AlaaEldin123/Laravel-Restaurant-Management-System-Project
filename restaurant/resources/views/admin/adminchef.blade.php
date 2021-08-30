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
                            <h4 class="card-title">Default form</h4>
                            <hr>
                            <form method="post" action="{{ url('/updatechef') }}" enctype="multipart/form-data">
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
    @include('admin.adminscript')
</body>

</html>
