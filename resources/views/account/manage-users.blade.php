@extends('../master')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý người dùng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý người dùng</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-list"></i>  Danh sách tài khoản (<span style="color: red;">{{count($data)}}</span>)</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Tìm kiếm...">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th colspan="1" style="text-align: center;">STT</th>
                      <th colspan="1" style="text-align: center;">Mã cán bộ</th>
                      <th colspan="1" style="text-align: center;">Họ và Tên</th>
                      <th colspan="1" style="text-align: center;">Ngày Sinh</th>
                      <th colspan="1" style="text-align: center;">Phòng ban</th>
                      <th colspan="1" style="text-align: center;">Chức vụ</th>
                      <th colspan="1" style="text-align: center;">Quyền</th>
                      <th colspan="1" style="text-align: center;">Trạng thái</th>
                      <th colspan="2" style="text-align: center;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0; ?>
                    @foreach($data as $user)
                    <tr>
                      <td style="text-align: center;">{{$stt+=1}}</td>
                      <td style="text-align: center;">{{$user->code}}</td>
                      <td style="text-align: center;">{{$user->name}}</td>
                      <td style="text-align: center;">{{$user->birth}}</td>
                      <td style="text-align: center;">{{$user->room_name}}</td>
                      <td style="text-align: center;">{{$user->position_name}}</td>
                      <td style="text-align: center;">
                        @if($user->role==1)
                          Quản trị viên
                        @elseif($user->role==2)
                          Cán bộ quản lý
                        @else 
                           Cán bộ nhân viên
                        @endif
                      </td>
                      <td style="text-align: center;">
                        @if($user->stt==1)
                          <i style="font-size: 18px;color: green;" class="fa fa-check-circle"></i>
                        @else
                          <i style="font-size: 18px;color: red;" class="fa fa-times"></i>
                        @endif
                      </td>
                      <td style="text-align: center;"><button type="button" class="btn btn-info"><i class="fa fa-edit"></i> Cập nhật</button></td>
                      <td style="text-align:center;"><button type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i> Xóa</button></td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
       
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection