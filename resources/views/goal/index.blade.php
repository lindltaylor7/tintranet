@extends('layout.template')

@section('template_title')
    Goal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Goal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('goals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Description</th>
										<th>Start Date</th>
										<th>Final Date</th>
										<th>Desired Quantity</th>
										<th>Unit Asigment</th>
										<th>Partial Quantity</th>
										<th>Area Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($goals as $goal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $goal->description }}</td>
											<td>{{ $goal->start_date }}</td>
											<td>{{ $goal->final_date }}</td>
											<td>{{ $goal->desired_quantity }}</td>
											<td>{{ $goal->unit_asigment }}</td>
											<td>{{ $goal->partial_quantity }}</td>
											<td>{{ $goal->area_id }}</td>

                                            <td>
                                                <form action="{{ route('goals.destroy',$goal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('goals.show',$goal->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('goals.edit',$goal->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $goals->links() !!}
            </div>
        </div>
    </div>
@endsection
