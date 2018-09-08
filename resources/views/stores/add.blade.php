<!-- active fields
    name - text
    description - textarea
    category - select
    image - file
    address - text
    website - text
-->

<!-- inactive fields
    status - on import
    owner_id - from user auth
-->


<div class="row">
    <form action="/store" method="POST" enctype="multipart/form-data" class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input type="text" id="name" name="name" class="validate">
                <label for="name">Name</label>
            </div>

            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="description"></textarea>
                <label for="description">Textarea</label>
            </div>

            <div class="input-field col s6">
                <input type="text" id="address" name="address" class="validate">
                <label for="name">Address</label>
            </div>

            <div class="input-field col s6">
                <input type="text" id="website" name="website" class="validate">
                <label for="name">Website</label>
            </div>

            <!-- update these with dynamic values when ready -->
            <input type="hidden" name="owner_id" value="1">
            <input type="hidden" name="status" value="1">

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            </button>
        </div>
    </form>
</div>
