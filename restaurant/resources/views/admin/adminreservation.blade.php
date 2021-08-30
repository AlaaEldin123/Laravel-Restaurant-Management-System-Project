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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Message</th>
                                    </tr>

                                </thead>
                                <hr>
                                <tbody>
                                    @foreach ($data as $data)

                                        <tr>
                                            <th scope="row">{{ $data->name }}</th>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{{ $data->time }}</td>
                                            <td>{{ $data->message }}</td>


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
