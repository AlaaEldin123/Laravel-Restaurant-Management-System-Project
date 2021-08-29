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


        <br><br>


        <div class="col-md-6">
            <form method="post" action="{{ url('/uploadfood') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input style="color: white" type="text" name="title" placeholder="Write a Title" required
                        class="form-control">

                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input style="color: white" type="text" name="price" placeholder="Write a Price" required
                        class="form-control">

                </div>
                <div class="form-group">
                    <label>Descripition</label>
                    <input style="color: white" type="text" class="form-control" name="descripition"
                        placeholder="Write a Descripition" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>



    </div>
    @include('admin.adminscript')


</body>

</html>
