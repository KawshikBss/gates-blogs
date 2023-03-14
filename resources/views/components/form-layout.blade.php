@push('css')
<link rel="stylesheet" href="{{asset('css/components/formLayout.css')}}">
@endpush
<div class="form-container">

    <form method="{{ $method }}" action="{{ $action }}" enctype="multipart/form-data" class="form-inner">
        @csrf

        @foreach($fields as $field)

        <div class="form-input-field">
            <label for="{{$field['name']}}" class="form-input-label">{{$field['label']}}</label>

            <input class="form-input" id="{{$field['name']}}" type="{{$field['type']}}" accept="{{$field['accept']?? ''}}" name="{{$field['name']}}" value="{{$field['value']?? '' }}" required placeholder="{{$field['placeholder']?? ''}}" />
            @error($field['name'])
            <p>{{$message}}</p>
            @enderror

        </div>

        @endforeach
        <button type="submit" class="form-submit-btn">
            {{$submitLabel}}
        </button>
    </form>
</div>