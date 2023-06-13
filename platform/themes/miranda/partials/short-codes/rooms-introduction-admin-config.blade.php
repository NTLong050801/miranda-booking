<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="form-group">
    <label class="control-label">{{ __('Subtitle') }}</label>
    <textarea name="subtitle" class="form-control" placeholder="{{ __('Subtitle') }}" rows="3">{{ Arr::get($attributes, 'subtitle') }}</textarea>
</div>

<div class="form-group">
    <label class="control-label">{{ __('Background Image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('First Image') }}</label>
    {!! Form::mediaImage('first_image', Arr::get($attributes, 'first_image')) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('Second Image') }}</label>
    {!! Form::mediaImage('second_image', Arr::get($attributes, 'second_image')) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('Third Image') }}</label>
    {!! Form::mediaImage('third_image', Arr::get($attributes, 'third_image')) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('Button text') }}</label>
    <input type="text" name="button_text" value="{{ Arr::get($attributes, 'button_text') }}" class="form-control"
           placeholder="{{ __('Button text') }}">
</div>

<div class="form-group">
    <label class="control-label">{{ __('Button URL') }}</label>
    <input type="text" name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control"
           placeholder="{{ __('Button URL') }}">
</div>
