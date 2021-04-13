@extends('admin.layout.base')

@section('title', __('admin.pages.pages'))

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            @if(Setting::get('demo_mode', 0) == 1)
            <div class="column" style="height:50px;color:red;">
                ** Demo Mode : @lang('admin.demomode')
            </div>
            @endif

            <div className="columns">
                <form id="cmspages" action="{{ route('admin.pages.update') }}" method="POST">
                    <div class="field">
                        <select class="input select" id="types" name="types">
                            <option value="select">Select </option>
                             <option value="help">Help</option>
                             <option value="page_privacy">Privacy Policy</option>
                             <option value="terms">Terms of Use</option>
                             <option value="cancel">Cancellation Policy</option>
                        </select>
                    </div>
                    {{ csrf_field() }}                    

                    <div class="columns">
                        <div class="column">
                            <textarea name="content" class="textarea" id="myeditor"></textarea>
                        </div>
                    </div>

                    <br>

                    <div class="columns">
                        <div class="column">
                            <a href="{{ route('admin.dashboard') }}" class="button  is-danger is-link btn-block">Cancelar</a>

                            <button type="submit" class="button is-link btn-block">Atualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('myeditor');</script>
<script type="text/javascript">
    @if (Setting::get('demo_mode', 0) == 1)
    $("#cmspages :input").prop("disabled", true);
    $("#types").prop("disabled", false);
    @endif

            $(document).ready(function(){
    $("#types").change(function(){
    var types = $("#types").val();
            $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_toke-n"]').attr('content') }
            });
            $.ajax({url: "{{ url('admin/pages/search') }}/" + types,
                    success: function(data) {
                    // $('#doc_title').val("");
                    //alert(data);
                    CKEDITOR.instances["myeditor"].setData(data)
                            //$('#myeditor').val("data");
                            //document.getElementById("myeditor").value = "blah ... "
                            //$(".content").val(data);
                            //$("#myeditor").hide();
                            //$("#myeditor").hide();
                            // $("#myeditor").append("<textarea id='myeditor'   name='content' >"+data+"</textarea> </br> ");
                    }});
    });
    }
    );
</script>

@endsection