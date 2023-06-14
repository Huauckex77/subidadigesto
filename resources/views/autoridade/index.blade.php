@extends('layouts.app')

@section('template_title')
    Autoridade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Autoridade') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('autoridades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <form method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                           <button class="btn btn-outline-primary" type="submit">Filtrar</button>
                          </div>
                    </form>
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
                                        
										<th>Autoridad</th>
										<th>Codigo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autoridades as $autoridade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $autoridade->autoridad }}</td>
											<td>{{ $autoridade->codigo }}</td>

                                            <td>
                                                <form action="{{ route('autoridades.destroy',$autoridade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autoridades.show',$autoridade->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autoridades.edit',$autoridade->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $autoridades->links() !!}
            </div>
        </div>
    </div>
@endsection
