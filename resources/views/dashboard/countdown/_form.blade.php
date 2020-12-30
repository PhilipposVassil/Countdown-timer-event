<div class="form-group col-md-4">
    <label for="countdown-timer">Choose date and time</label>
    <input type="datetime-local" class="form-control {{ $errors->has('countdown') ? 'is-invalid' :'' }}" name="countdown" value="{{$countdown}}" min="{{$time_now}}">
    @error('countdown')
    <p class="text-danger"> {{$errors->first('countdown')}}</p>
    @enderror
</div>
@if($checkbox)
    <div class="form-group">
        <input id='disable' type="checkbox" name="disable" value="1">
        <input id='enableHidden' type="hidden" name="enableHidden" value="0">
        <label for="countdown">Disable Countdown</label>
    </div>
@endif
<div class="form-group">
    <button class="btn btn-primary" type="submit">{{$submitButtonText}}</button>
</div>
