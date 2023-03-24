<div class="inputArea form-group">
    <label for="{{$name}}">{{$label ?? ''}}</label>
    <select class="form-control @error($name) is-invalid @enderror" name="{{$name}}" id="{{$name}}" {{empty($required) ? '' : 'required'}}>
        <option value="" selected disabled>Selecione...</option>
        @foreach ($items as $item)
            <option @if(old($name) == $item->$optionValue || $currentValue == $item->$optionValue) selected @endif value="{{$item->$optionValue}}">{{$item->$optionLabel}}</option>
        @endforeach
    </select>
    @error($name)
        <small style="color:red;">{{ $message }}</small>
    @enderror
</div>
