

    <x-header />
    <!-- Make sure to include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-2 sticky-top animate__animated animate__fadeInLeft">
            <h1>Blog App</h1>
            <ul>
                @foreach($blogs as $blog)
                <li><a href="#{{$blog->blog_heading}}">{{$blog->blog_heading}}</a></li>
                @endforeach
            </ul>
        </div>
        <br>
        <div class="col-lg-10 animate__animated animate__fadeInRight" style="overflow-y: auto; height: calc(100vh - 3rem);">
            @foreach($blogs as $blog)
            <div class="card">
                <div class="card-header" id="{{$blog->blog_heading}}">
                    <h1>{{$blog->blog_heading}}</h1>
                </div>
                <div class="card-body">
                    <img src="{{asset($blog->blog_image)}}" width="100%" height="400px" alt="">
                    <h3>{{$blog->blog_sub_heading}}</h3>
                </div>
                <div class="card-footer" style="display: flex;justify-content:space-around">
                    <p>like</p>
                    <p>share</p>
                    <p>Comment</p>
                </div>
            </div>
            <br>
            @endforeach
            <br>
            
        </div>
    </div>
</div>

    <x-footer />

    
