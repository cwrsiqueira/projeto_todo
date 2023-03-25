{{-- title / name / value / onclick = '' --}}
<div id="inputPreview" title="{{ $title }}">
    <input name="{{ $name }}" id="{{ $name }}" type="checkbox" class="css-checkbox"
        @if ($value == 1) checked @endif onclick="{{ $onclick ?? '' }}" />
    <label for="{{ $name }}">
        <div class="text">{{ $title }}</div>
    </label>
</div>
