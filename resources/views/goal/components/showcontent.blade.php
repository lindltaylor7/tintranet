ASD <section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Goal</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('goals.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <strong>Description:</strong>
                        {{ $goal->description }}
                    </div>
                    <div class="form-group">
                        <strong>Start Date:</strong>
                        {{ $goal->start_date }}
                    </div>
                    <div class="form-group">
                        <strong>Final Date:</strong>
                        {{ $goal->final_date }}
                    </div>
                    <div class="form-group">
                        <strong>Desired Quantity:</strong>
                        {{ $goal->desired_quantity }}
                    </div>
                    <div class="form-group">
                        <strong>Unit Asigment:</strong>
                        {{ $goal->unit_asigment }}
                    </div>
                    <div class="form-group">
                        <strong>Partial Quantity:</strong>
                        {{ $goal->partial_quantity }}
                    </div>
                    <div class="form-group">
                        <strong>Area Id:</strong>
                        {{ $goal->area_id }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>