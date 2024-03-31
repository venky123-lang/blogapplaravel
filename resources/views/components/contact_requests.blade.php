<x-admin_header />
    <div class="container mt-5">
        <div class="row">
            <!-- <div class="col-lg-3"></div> -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Contact Requests
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Message</th>
                            </tr>
                            <?php $sno=1; ?>
                            @foreach($new as $contacts)
                            <tr>
                                <td><?php echo $sno++; ?></td>
                                <td>{{ $contacts->fname }}</td>
                                <td>{{ $contacts->email }}</td>
                                <td>{{ $contacts->mobile }}</td>
                                <td>{{ $contacts->address }}</td>
                                <td>{{ $contacts->message }}</td>
                            </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
                
            </div>
            <!-- <div class="col-lg-3"></div> -->
        </div>
    </div>


<x-footer />