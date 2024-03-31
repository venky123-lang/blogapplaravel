
<x-admin_header />
    <div class="container mt-5">
        <div class="row">
            <!-- <div class="col-lg-3"></div> -->
            <div class="col-lg-12">
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Added Blogs
                        <a href="{{ url('add_blogs') }}" class="btn btn-primary float-end">Add More</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Sno</th>
                                <th>Blog Heading</th>
                                <th>Blog Img</th>
                                <th>Blog Sub-heading</th>
                                <th colspan="2">Action</th>
                            </tr>

                            @foreach($blogs1 as $blog1)
                            <tr>
                                <td>{{ $blog1->id }}</td>
                                <td>{{ $blog1->blog_heading }}</td>
                                <td><img src="{{ asset($blog1->blog_image) }}" width="150px" height="100px" alt=""></td>
                                <td>{{ $blog1->blog_sub_heading }}</td>
                                <td><a href="{{ url('edit/'.$blog1->id.'') }}" class="btn btn-warning">Edit</a></td>
                                <td><a href="{{ url('delete/'.$blog1->id.'') }}" class="btn btn-danger">Delete</a></td>

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


