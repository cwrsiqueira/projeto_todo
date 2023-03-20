<div class="inputArea form-group">
    @if (!empty($label))
        <label for="{{$name}}">{{$label ?? ''}}</label>
    @endif
    <input
        class="form-control {{ $class ?? '' }}"
        type="{{empty($type) ? 'text' : $type}}"
        id="{{$name}}"
        name="{{$name}}"
        placeholder="{{$placeholder ?? ''}}"
        value="{{ $value ?? '' }}"
        {{empty($required) ? '' : 'required'}}
    >
    @error($name)
        <small style="color:red;">{{ $message }}</small>
    @enderror
</div>
