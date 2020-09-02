
<form class="form-horizontal" action="{{ $action }}" name="state-document-url-form" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="{{ $method }}">
    <div class="form-group">
        <label for="marketer_id" class="col-md-1 control-label">Marketer</label>
        <div class="col-md-3">
            {{ Form::select('marketer_id', $marketers, $stateDocumentUrl->marketer_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="state_id" class="col-md-1 control-label">State</label>
        <div class="col-md-3">
            {{ Form::select('state_id', $states, $stateDocumentUrl->state_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="template_type" class="col-md-1 control-label">Doc Type</label>
        <div class="col-md-3">
            {{ Form::select('template_type', $template_types, $stateDocumentUrl->template_type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="template_type" class="col-md-1 control-label">Link Type</label>
        <div class="col-md-3">
            {{ Form::select('type', $types, $stateDocumentUrl->type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">Commodity</label>
        <div class="col-md-3">
            {{ Form::select('commodity_id', $commodities, $stateDocumentUrl->commodity_id, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="renewable_type" class="col-md-1 control-label">Renewable Type</label>
        <div class="col-md-3">
            {{ Form::select('renewable_type', $renewable_types, $stateDocumentUrl->renewable_type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="renewable_type" class="col-md-1 control-label">Customer Type</label>
        <div class="col-md-3">
            {{ Form::select('revenue_class_id', $revenue_classes, $stateDocumentUrl->revenue_class_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="locale" class="col-md-1 control-label">Locale</label>
        <div class="col-md-3">
            {{ Form::select('locale_code', $locale_codes, $stateDocumentUrl->locale_code, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="product_type_id" class="col-md-1 control-label">Product Type</label>
        <div class="col-md-3">
            {{ Form::select('product_type_id', $product_types, $stateDocumentUrl->product_type_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-md-1 control-label">Name</label>
        <div class="col-md-3">
            {{ Form::text('name', $stateDocumentUrl->name, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">URL</label>
        <div class="col-md-3">
            {{ Form::text('url', $stateDocumentUrl->url, ['class' => 'form-control']) }}
        </div>
    </div>



    <div class="form-group">
        <label for="source_file_name" class="col-md-1 control-label">Source File Name</label>
        <div class="col-md-3">
            {{ Form::text('source_file_name', $stateDocumentUrl->source_file_name, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="version" class="col-md-1 control-label">Version</label>
        <div class="col-md-3">
            {{ Form::text('version', $stateDocumentUrl->version, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Show on Product Details</label>
        <div class="col-md-3">
            <input type="hidden" name="show_on_product_details" value="0">
            {{ Form::checkbox('show_on_product_details', 1, $stateDocumentUrl->show_on_product_details, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Show on Signup Form</label>
        <div class="col-md-3">
            <input type="hidden" name="show_on_signup_form" value="0">
            {{ Form::checkbox('show_on_signup_form', 1, $stateDocumentUrl->show_on_signup_form, ['class' => 'form-control']) }}
        </div>
    </div>


    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Enabled</label>
        <div class="col-md-3">
            <input type="hidden" name="enabled" value="0">
            {{ Form::checkbox('enabled', 1, $stateDocumentUrl->enabled, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-9">
            <button class="btn btn-sm btn-success" type="submit">Save Url</button>
        </div>
    </div>

</form>
