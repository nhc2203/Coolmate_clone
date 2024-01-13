@extends('admin.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Fixed Header Table</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: auto;">
              <table class="table table-striped table-hover">
                <thead class="thead-light">
                  <tr class="text-center">
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Ghi Chú</th>
                    <th>Chi Tiết</th>
                    <th>Ngày Tạo</th>
                    <th>Trạng Thái</th>
                    <th>Tùy Biến</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td class="align-middle">1</td>
                    <td class="align-middle">Nguyễn Hùng Cường</td>
                    <td class="align-middle">09283042</td>
                    <td class="align-middle">nguyenVanA@gmail.com</td>
                    <td class="align-middle">TP.HCM</td>
                    <td class="align-middle">Giao Nhanh</td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-primary btn-sm">Xem</a>
                    </td>
                    <td class="align-middle">02/01/2024</td>
                    <td class="align-middle">
                        <span class="bg-success rounded p-1">Đã Xác Nhận</span>
                    </td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td class="align-middle">1</td>
                    <td class="align-middle">Nguyễn Hùng Cường</td>
                    <td class="align-middle">09283042</td>
                    <td class="align-middle">nguyenVanA@gmail.com</td>
                    <td class="align-middle">TP.HCM</td>
                    <td class="align-middle">Giao Nhanh</td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-primary btn-sm">Xem</a>
                    </td>
                    <td class="align-middle">02/01/2024</td>
                    <td class="align-middle">
                        <span class="bg-success rounded p-1">Đã Xác Nhận</span>
                    </td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
@endsection