
<form class="form-horizontal" action="{{ $action }}" name="utility-territory-document-url-form" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="{{ $method }}">
    <div class="form-group">
        <label for="marketer_id" class="col-md-1 control-label">Marketer</label>
        <div class="col-md-3">
            {{ Form::select('marketer_id', $marketers, $utilityTerritoryDocumentUrl->marketer_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="state_id" class="col-md-1 control-label">Utility Territory</label>
        <div class="col-md-3">
            {{ Form::select('utility_territory_id', $utilityTerritories, $utilityTerritoryDocumentUrl->utility_territory_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="template_type" class="col-md-1 control-label">Type</label>
        <div class="col-md-3">
            {{ Form::select('template_type', $types, $utilityTerritoryDocumentUrl->type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">Name</label>
        <div class="col-md-3">
            {{ Form::text('url', $utilityTerritoryDocumentUrl->name, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">URL</label>
        <div class="col-md-3">
            {{ Form::text('url', $utilityTerritoryDocumentUrl->url, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Show on Product Details</label>
        <div class="col-md-3">
            <input type="hidden" name="show_on_product_details" value="0">
            {{ Form::checkbox('show_on_product_details', 1, $utilityTerritoryDocumentUrl->show_on_product_details, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Show on Signup Form</label>
        <div class="col-md-3">
            <input type="hidden" name="show_on_signup_form" value="0">
            {{ Form::checkbox('show_on_signup_form', 1, $utilityTerritoryDocumentUrl->show_on_signup_form, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Enabled</label>
        <div class="col-md-3">
            <input type="hidden" name="enabled" value="0">
            {{ Form::checkbox('enabled', 1, $utilityTerritoryDocumentUrl->enabled, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-9">
            <button class="btn btn-sm btn-success" type="submit">Save Url</button>
        </div>
    </div>

</form>
