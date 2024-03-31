<x-header />
<x-slot name="title">
    Admin Login
</x-slot>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                    @if(session('err'))
                        <div class="alert alert-danger">{{ session('err') }}</div>
                    @endif
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                <div class="card">
                    
                    <div class="card-header">
                        Admin Login
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin_login') }}" method="post">
                            @csrf
                            <input type="text" name="username" class="form-control" placeholder="Enter username" value="" id="">
                            <br>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password " value="" id="">
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