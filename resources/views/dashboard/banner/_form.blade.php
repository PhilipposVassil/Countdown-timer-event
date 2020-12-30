<div class="form-group">
    <label>Banner:</label>
    @if($banner)
        <img class="resize pb-3" src="/banner/{{$banner}}" alt="Banner image">
    @endif
    <input type="file" name="image" class="form-control">
    @error('image')
    <p class="text-danger"> {{$errors->first('image')}}</p>
    @enderror
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">{{$submitButtonText}}</button>
</div>
