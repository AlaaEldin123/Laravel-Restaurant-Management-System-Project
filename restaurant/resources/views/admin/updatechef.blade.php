<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                            <form method="post" action="{{ url('/updatefoodchef', $data->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" value="{{ $data->name }}" name="name"
                                        placeholder="Write a Name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Speciality</label>
                                    <input class="form-control" type="text" value="{{ $data->speciality }}"
                                        name="speciality" placeholder="Write a Speciality" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Old Image</label>
                                    <img src="/chefimage/{{ $data->image }}" alt="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image</label>
                                    <input type="file" class="form-control" name="image">
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
