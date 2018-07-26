@csrf
<div class="form-group">
    <label for="name">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $post->title }}">
</div>

<div class="form-group">
    <label>Theme</label>
    <div class="form-group">
        <select class="form-control" name="brand_id">
            <option disabled selected value=''>- - Select theme - -</option>
            @foreach($themes as $theme)
                <option name="" value={{$theme->id}}>
                    {{ $theme->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label for="nationality">Body</label>
    <textarea type="text" name="body" rows="15" cols="50" class="form-control"
              placeholder="Be creative :)">{{ $post->body }}</textarea>
</div>
