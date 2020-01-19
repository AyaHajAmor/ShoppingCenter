<span class="label
{{ $level == 'user'?'label-info':''}}
{{ $level == 'vendor'?'label-warning':''}}
{{ $level == 'company'?'label-success':''}}
">
{{ trans('admin.'.$level) }}
</span>

