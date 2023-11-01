@props([
    'name',
    'type' => 'text',
    'placeholder' => null,
    'required' => false
])
<div class="show-password" id="password">
<input type="{{ $type }}" placeholder="{{ $placeholder ?: ucwords(str_replace('_', ' ', $name)) }}" class="form-control form-input pass-field" {{ $required ? 'required' : '' }} id="passInput">
 <i class="fa-regular fa-eye show-pass " id="showPass"></i>
<div>
