@props([
    'name',
    'type' => 'text',
    'placeholder' => null,
    'required' => false,
    'label' => $label ?? null,
    // 'textarea' => $textarea ?? null,
])

@if($label != null)
<label for="{{ $label }}" class="label-feld">{{ ucwords(str_replace('_', ' ', $label)) }}</label>
@endif
{{-- @if($textarea != null)
<label  class="input-field">{{ ucwords(str_replace('_', ' ', $textarea)) }}</label>
@endif --}}
<input type="{{ $type }}" id="{{ $label }}"  placeholder="{{ $placeholder ?: ucwords(str_replace('_', ' ', $name)) }}" class="form-control form-input" {{ $required ? 'required' : '' }}>
