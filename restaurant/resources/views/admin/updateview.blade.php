<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                            <form method="post" action="{{ url('/update', $data->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" value="{{ $data->title }}" name="title"
                                        placeholder="Write a Title" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input class="form-control" value="{{ $data->price }}" type="text" name="price"
                                        placeholder="Write a Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripition</label>
                                    <input type="text" value="{{ $data->descripition }}" class="form-control"
                                        name="descripition" placeholder="Write a Descripition" required>
                                </div>
                                <div class="form-group">
                                    <label>Old Image</label>
                                    <img height="150px" width="150px" src="/foodimage/{{ $data->image }}" alt="">
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
