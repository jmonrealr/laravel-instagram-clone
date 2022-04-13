<!-- Button trigger modal -->

<div class="modal fade" id="ModalCreatePost" tabindex="-1" aria-labelledby="ModalCreatePostLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalCreatePostLabel">New Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" id="form-modal" name="form-modal" enctype="multipart/form-data">
            <input id="title" name="title" class="w-100 border-0 p-3 input-post" placeholder="Add a title...">
            <input id="body" name="body" class="w-100 border-0 p-3 input-post" placeholder="Add a body of the post...">
            <div class="mb-3">
                <input class="form-control" type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);">
                <img id="imgshow" style="visibility: hidden" class="img-fluid" src="#" alt="your image" />
            </div>
            <input id="user_id" name="user_id" type="hidden" value="{{Auth::user()->id}}">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="post-create">Post</button>
        </div>
      </div>
    </div>
  </div>

{{--@section('footer-scripts')--}}
    <script>
        function previewFile(input) {
            let file = $("input[type=file]").get(0).files[0];
            if(file){
                let reader = new FileReader();
                reader.onload = function(){
                    $("#imgshow").attr("src", reader.result);
                    $("#imgshow").attr("style", 'visible');
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#post-create').click(function(){
            const title = $('#title').val();
            const body = $('#body').val();
            const user_id = $('#user_id').val();
            //let formData = new FormData();
            //img = $("input[type=file]").get(0).files[0];
            //formData.append('img',$('#image')[0].files[0]);
            var formData = new FormData(document.querySelector('#form-modal'));
            console.log(formData.getAll(0));
            $.ajax({
                url:'create',
                data://{
                    //title,
                    //body,
                    //user_id,
                    formData
                //}
                ,
                type:'post',
                cache:false,
                contentType: false,
                processData: false,
                success: function(data){
                    //console.log(data);
                    $('#ModalCreatePost').modal('toggle');
                },
                statusCode: {
                    404: function(e){
                        console.log(e);
                    }
                },
                error:function(x,xs,xt){
                    //window.open(JSON.stringify(x));
                    iziToast.error({
                        title: 'Error',
                        message: x.responseJSON[0]
                    })

                    // alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                }
            });
        });
    </script>
{{--@endsection--}}
