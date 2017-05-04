@extends('layouts.admin')
@section('content')
    <div class="padding p-b-0">
        <div class="page-title m-b">
            <h1 class="inline m-a-0">Upload Pictures</h1>
            @if(isset($hotel))
                <a href="{{route('hotels.edit',$hotel->slug)}}" class="btn btn-primary">Edit Hotels</a>
            @endif

        </div>
        <input id="input-700" name="file" type="file" multiple class="file-loading">
    </div>


@endsection
@section('jscript')
    <script>
        $("#input-700").fileinput({
            uploadUrl: "{{route('images.upload')}}", // server upload action
            uploadAsync: true,
            maxFileCount: 25,
            browseOnZoneClick:true,
            fileActionSettings:{showZoom:false},
            uploadExtraData:{_token:'{{csrf_token()}}',
                hotel_id:'{{$hotel->id}}',
            }
        });
    </script>
@endsection