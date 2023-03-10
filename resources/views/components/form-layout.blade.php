@push('css')
<link rel="stylesheet" href="{{asset('css/components/formLayout.css')}}">
@endpush
<div class="form-container">

    <form method="{{ $method }}" action="{{ $action }}" class="form-inner">
        @csrf

        @foreach($fields as $field)

        <div class="form-input-field">
            <label for="{{$field['name']}}" class="form-input-label">{{$field['label']}}</label>

            <input class="form-input" id="{{$field['name']}}" type="{{$field['type']}}" name="{{$field['name']}}" value="{{$field['value']?? '' }}" required placeholder="{{$field['placeholder']}}" />

        </div>

        @endforeach
        <button type="submit" class="form-submit-btn">
            {{$submitLabel}}
        </button>
    </form>
</div>