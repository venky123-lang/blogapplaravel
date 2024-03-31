<x-admin_header />
<x-slot name="title">
    Add Blogs
</x-slot>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Add More Blogs
                        <a href="{{ url('admin_dashboard') }}" class="btn btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('blogs_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="blog_heading" class="form-control" placeholder="Enter Blog Heading" value="" id="">
                            <br>
                            <input type="text" name="blog_sub_heading" class="form-control" placeholder="Enter Blog sub-Heading" value="" id="">
                            <br>
                            <input type="file" name="blog_image" id="" class="form-control">
                            
                            <br>
                            <input type="submit" value="Add" name="submit" class="btn btn-success" id="">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3"></div>
        </div>
    </div>
    <br>
<x-footer />