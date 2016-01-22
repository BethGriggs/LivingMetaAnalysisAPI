<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Study Form</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="article">Article</label>
            <div class="col-md-5">
                <select id="article" name="article" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Title</label>
            <div class="col-md-5">
                <input id="textinput" name="textinput" type="text" placeholder="title of study" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Multiple -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tags">Tags</label>
            <div class="col-md-5">
                <select id="tags" name="tags" class="form-control" multiple="multiple">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
        </div>

    </fieldset>
</form>


@section('footer')
    <script>
    $('#tags').select2();
    </script>
@endsection