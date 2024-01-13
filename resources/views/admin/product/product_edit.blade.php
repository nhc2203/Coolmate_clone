

@extends('admin.main')
@section('content')

<div class="card card-primary">
  <!-- form start -->
  <form action="" method="POST">
    <!-- /.card-body -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" value="{{$product -> name}}" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group col-md-6">
              <input type="text" value="{{$product -> material}}" class="form-control" name="material" placeholder="Nhập chất liệu sản phẩm">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" value="{{$product -> price_normal}}" class="form-control" name="price_normal" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group col-md-6">
              <input type="text" value="{{$product -> price_sale}}" class="form-control" name="price_sale" placeholder="Nhập giá giảm">
            </div>
          </div>
          <textarea id="editor1" name="desc" placeholder="Đặc điểm nổi bật">{{$product -> desc}}</textarea>
          <textarea id="editor2" name="content" placeholder="Mô tả sản phẩm">{{$product -> content}}</textarea>
          <script>
            ClassicEditor
                .create( document.querySelector( '#editor1' ) )
                .then( editor => {
                    editor.ui.view.editable.element.style.height = '200px';
                })
                .catch( error => {
                    console.error( error );
                } );
            ClassicEditor
                .create( document.querySelector( '#editor2' ) )
                .then( editor => {
                    editor.ui.view.editable.element.style.height = '200px';
                })
                .catch( error => {
                    console.error( error );
                } );
          </script>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <div class="add-img">
              <label for="formFile" >Ảnh Sản Phẩm</label>
              <input type="file" id="formFile" class="form-control-file">
              <input type="hidden" name="image" value="{{$product -> image}}" id="input-file-img-hiden">
              <div class="image-show" id="input-file-img" >
                <img src="{{asset($product -> image)}}" alt="" class="img-thumbnail" style="width: 100px">
              </div>
            </div>
            <div class="add-img">
              <label for="formFileMultiple">Ảnh Mô Tả</label>
              <input type="file" id="formFileMultiple" multiple class="form-control-file">
              <div class="image-show" id="input-file-imgs">
                @php
                    $image_childrens = explode("*", $product -> image_children)   
                @endphp
                @foreach ($image_childrens as $item)
                    <img src="{{asset($item)}}" alt="">
                    <input type="hidden" name="image_children[]" value="{{$item}}" id="input-file-img-hiden">

                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Cập Nhập Sản Phẩm</button>
    </div>
    @csrf
  </form>
</div>

@endsection





