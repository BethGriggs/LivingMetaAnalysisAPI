<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Add Article</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Title</label>
            <div class="col-md-8">
                <input id="title" name="title" type="text" placeholder="title of article" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="authors">Authors</label>
            <div class="col-md-8">
                <input id="authors" name="authors" type="text" placeholder="type to select or add an author" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="publication_date">Publication Year</label>
            <div class="col-md-2">
                <input id="publication_date" name="publication_date" type="text" placeholder="yyyy" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="link_to_article">Link to article </label>
            <div class="col-md-6">
                <input id="link_to_article" name="link_to_article" type="text" placeholder="doi / hyperlink of the article" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="addArticle"></label>
            <div class="col-md-4">
                <button id="addArticle" name="addArticle" class="btn btn-primary">Add Article</button>
            </div>
        </div>

    </fieldset>
</form>

@section('footer')
    {{--<script>--}}
        {{--$('#tag_list').select2();--}}
    {{--</script>--}}
@endsection