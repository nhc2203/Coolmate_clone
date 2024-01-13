$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
//Them 1 anh
$('#formFile').on('change',()=>{
    var formData = new FormData();
    var file = $('#formFile')[0].files[0]
    formData.append('file',file)
    $.ajax({
        url : '/upload',
        processData: false,//illega invocation
        dataType: 'json',
        data: formData,
        method: 'POST',
        contentType: false,// khong hien o preview
        success: function(result){
            if(result.success == true)
            {
                html = '';
                html+= '<img src="'+result.path+'" alt="" class="img-thumbnail" style="width: 100px">';
                $('#input-file-img').html(html)
                $('#input-file-img-hiden').val(result.path)
            }
        }
    })
    })

    //Them Nhieu Anh
    $('#formFileMultiple').on('change',()=>{
        var formData = new FormData()
        var files = $('#formFileMultiple')[0].files
        for (let index = 0; index < files.length; index++) {
            formData.append('files[]',files[index])
        }
        $.ajax({
            url:'/uploads',
            method: 'POST',
            dataType: 'JSON',
            data: formData,
            contentType: false,
            processData: false,
            success:function(result){
                if(result.success = true)
                {
                    let url = window.location.hostname
                    if(url.includes('minacode.net')) {
                        for (let index = 0; index < result.url.length; index++) {
                            let truePath =  "/public"+result.url[index] ;
                            html =''
                           html+=
                           '<img src="'+truePath+'" alt="" class="img-thumbnail"><input type="hidden" value="'+truePath+'" class="product-images" name="image_children[]">'
                           $('#input-file-imgs').html(html)
                        }
                    }
                    else {
                        html =''
                        for (let index = 0; index < result.url.length; index++) {
                           html+=
                           '<img src="'+result.url[index]+'" alt="" class="img-thumbnail"><input type="hidden" value="'+result.url[index]+'" class="product-images" name="image_children[]">'
                           $('#input-file-imgs').html(html)
                       
                        }
                    }
    
                }
            }
        })
    })

    