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
                    <th>Tùy Biến</th>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td class="align-middle">
                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                    <td class="align-middle">1</td>
                    <td class="align-middle"><img src="./assets/img/product1.jpg" class="img-fluid img-thumbnail" style="width: 70px;"></td>
                    <td class="align-middle">Quần Kaki Excool dáng Straight</td>
                    <td class="align-middle">56.000đ</td>
                    <td class="align-middle">1</td>
                    <td class="align-middle">56.000đ</td>
                  </tr>
                  <tr class="text-center">
                    <td class="align-middle">
                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                    <td class="align-middle">2</td>
                    <td class="align-middle"><img src="./assets/img/product1.jpg" class="img-fluid img-thumbnail" style="width: 70px;"></td>
                    <td class="align-middle">Quần Kaki Excool dáng Straight</td>
                    <td class="align-middle">56.000đ</td>
                    <td class="align-middle">1</td>
                    <td class="align-middle">56.000đ</td>
                  </tr>
                  <tr class="text-center">
                    <td class="align-middle" colspan="6">Tổng</td>
                    <td class="align-middle">122.000đ</td>
                    
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