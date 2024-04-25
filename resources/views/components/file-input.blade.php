@props(['value', 'disabled' => false])

    <span>{{$value}}</span>
    <input {!! $attributes->merge(['class' => 'sr-only', 'type' => 'file']) !!} >
