@extends('template')

@section('konten')

    <div class="login">
    <h2>Welcome Admin</h2><br>
    <p>Silahkan login untuk mengelola data KasMas</p><br>
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-success">Login</button>
              </div>
            </div>
        </form>
        </div>

@endsection