<div class="inputArea form-group">
    <label for="{{$name}}">{{$label ?? ''}}</label>
    <textarea
        class="form-control @error($name) is-invalid @enderror"
        name="{{$name}}"
        id="{{$name}}"
        cols="{{ $cols ?? '' }}"
        rows="{{ $rows ?? '' }}"
        placeholder="{{$placeholder ?? ''}}"
        {{empty($required) ? '' : 'required'}}
    >{{ $value ?? '' }}</textarea>
    @error($name)
        <small style="color:red;">{{ $message }}</small>
    @enderror
</div>
