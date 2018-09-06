@csrf
<div class="form-group">
    <h1>Comment on {{ $post->title }}</h1>
    <input hidden name="post_id" value="{{ $post->id }}">
</div>

<div class="form-group">
    <label>Comment</label>
    <textarea type="text" name="body" class="form-control" placeholder="Say something positive! :)" onkeyup="textAreaAdjust(this)" style="overflow:hidden"></textarea>
    <script>
        function textAreaAdjust(o) {
            o.style.height = "1px";
            o.style.height = (25 + o.scrollHeight) + "px";
        }
    </script>
</div>
