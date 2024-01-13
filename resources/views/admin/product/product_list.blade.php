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
                  <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Bán</th>
                    <th>Giá Giảm</th>
                    <th>Ngày Đăng</th>
                    <th>Tùy Chỉnh</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr>
                      <td class="align-middle">{{$product -> id}}</td>
                      <td class="align-middle"><img src="{{asset($product -> image)}}" class="img-fluid img-thumbnail" style="width: 70px;"></td>
                      <td class="align-middle">{{$product -> name}}</td>
                      <td class="align-middle">{{$product -> price_normal}}</td>
                      <td class="align-middle">{{$product -> price_sale}}</td>
                      <td class="align-middle">{{$product -> created_at}}</td>
                      <td class="align-middle">
                        <a onclick="removeRow(product_id={{$product -> id }},url='/admin/product/delete')" href="#" class="btn btn-danger btn-sm">Xóa</a>
                        <a href="/admin/product/edit/{{$product -> id}}" class="btn btn-primary btn-sm">Sửa</a>
                      </td>
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
<script>
  function removeRow(product_id,url){
    if(confirm('Are You Sure')){
          $.ajax({
          url: url,
          data: {product_id},
          method: 'GET',
          dataType:'JSON',
          success: function (res){
            if(res.success == true){
              location.reload();
            }
          }
      }
      )
    }
  }
</script>
@endsection