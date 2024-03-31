<x-admin_header />
<x-slot name="title">
    Update Blogs
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
                        Update Blogs
                        <a href="{{ url('admin_dashboard') }}" class="btn btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update_blogs/'.$blog->id.'') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" name="blog_heading" class="form-control" placeholder="Enter Blog Heading" value="{{ $blog->blog_heading }}" id="">
                            <br>
                            <input type="text" name="blog_sub_heading" class="form-control" placeholder="Enter Blog sub-Heading" value="{{ $blog->blog_sub_heading }}" id="">
                            <br>
                            <div class="display-flex">
                            <img src="{{ asset( $blog->blog_image ) }}" width="100px" height="100px" alt="">
                            
                            <input type="file" name="blog_image" id=""  >
                            </div>
                            
                            <br>
                            <input type="submit" value="Update" name="submit" class="btn btn-success" id="">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3"></div>
        </div>
    </div>
    <br>
<x-footer />