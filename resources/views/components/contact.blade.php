<x-header />
<x-slot name="title">
    Contact Form
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
                        Contact Us Form
                    </div>
                    <div class="card-body">
                        <form action="{{ url('contact_store') }}" method="post">
                        @csrf
                            <input type="text" name="fname" class="form-control" placeholder="Enter your Name" value="" id="">
                            <br>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" value="" id="">
                            <br>
                            <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile" value="" id="">
                            <br>
                            <input type="text" name="address" class="form-control" placeholder="Enter your Address" value="" id="">
                            <br>
                            <textarea name="message" id="" placeholder="Describe your message here ..." class="form-control" cols="30" rows="10"></textarea>
                            <br>
                            <input type="submit" value="submit" name="submit" class="btn btn-success" id="">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3"></div>
        </div>
    </div>
    <br>
<x-footer />