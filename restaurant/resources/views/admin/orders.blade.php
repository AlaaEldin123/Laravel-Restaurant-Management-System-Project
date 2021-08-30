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
            <div class="card">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="text-center card-title">Food Menu Tab</h4>
                        <div class=" table-responsive">
                            <table style="width: 100%" class="border table-hover">
                                <thead>
                                    <tr class="table-danger">

                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Food Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>

                                </thead>
                                <hr>
                                <tbody>
                                    @foreach ($data as $data)

                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->foodname }}</td>
                                            <td>${{ $data->price }}</td>
                                            <td>{{ $data->quantity }}</td>
                                            <td>{{ $data->price * $data->quantity }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
