@section('page-style')
    <link href="/assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet"/>
@endsection
<form class="form-horizontal" action="{{ $action }}" name="legal-template-form" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="{{ $method }}">
    <div class="form-group">
        <label for="marketer_id" class="col-md-1 control-label">Marketer</label>
        <div class="col-md-3">
            {{ Form::select('marketer_id', $marketers, $legal_template->marketer_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="state_id" class="col-md-1 control-label">State</label>
        <div class="col-md-3">
            {{ Form::select('state_id', $states, $legal_template->state_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="template_type" class="col-md-1 control-label">Template type</label>
        <div class="col-md-3">
            {{ Form::select('template_type', $types, $legal_template->template_type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">Commodity</label>
        <div class="col-md-3">
            {{ Form::select('commodity_id', $commodities, $legal_template->commodity_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">Renewal Type</label>
        <div class="col-md-3">
            {{ Form::select('renewable_type', ['brown' => 'Brown', 'green' => 'Green', 'uniform' => 'Uniform'], $legal_template->renewable_type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="commodity_id" class="col-md-1 control-label">Customer Type</label>
        <div class="col-md-3">
            {{ Form::select('customer_type', $customerTypes, $legal_template->customer_type, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="locale" class="col-md-1 control-label">Locale</label>
        <div class="col-md-3">
            {{ Form::select('locale_code', $locale_codes, $legal_template->locale_code, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="product_type_id" class="col-md-1 control-label">Product Type</label>
        <div class="col-md-3">
            {{ Form::select('product_type_id', $productTypes, $legal_template->product_type_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="product_type_id" class="col-md-1 control-label">Utility Territory</label>
        <div class="col-md-3">
            {{ Form::select('utility_territory_id', $utilityTerritories, $legal_template->utility_territory_id, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="source_file_name" class="col-md-1 control-label">Source File Name</label>
        <div class="col-md-3">
            {{ Form::text('source_file_name', $legal_template->source_file_name, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="version" class="col-md-1 control-label">Version</label>
        <div class="col-md-3">
            {{ Form::text('version', $legal_template->version, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-1 control-label">Is Active</label>
        <div class="col-md-3">
            <input type="hidden" name="is_active" value="0">
            {{ Form::checkbox('is_active', 1, $legal_template->is_active, ['class' => 'form-control']) }}
        </div>
    </div>




    <div class="form-group">
        <div class="col-md-12">
            <textarea class="ckeditor" id="editor1" name="template_html" rows="30">
                {{ $legal_template->template_html }}
            </textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-9">
            <button class="btn btn-sm btn-success" type="submit">Save Template</button>
        </div>
    </div>

</form>

@section('page-js')
    <script src="/assets/plugins/ckeditor/ckeditor.js"></script>
@endsection

