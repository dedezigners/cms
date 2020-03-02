@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">
                    <div class="float-right">
                    <a class="btn btn-github" href="{{ route('create', ['slug' => $title]) }}">
                        <span class="btn-label"><i class="material-icons">add</i></span>Create {{ ucfirst($title) }}<div class="ripple-container"></div>
                    </a>
                </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">{{ strtoupper($title) }}</h4>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr #</th>

                                        @foreach ($columns as $column)
                                        
                                        <th>{{ ucfirst(str_replace('_', ' ', $column['field'])) }}</th>
                                        
                                        @endforeach

                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if (count($data) > 0) {
                                        $inc = 1;
                                        foreach ($data as $key) {
                                            ?>
                                            <tr>
                                                <td class="fw6">{{ $inc }}</td>
                                                
                                                @foreach ($columns as $column)

                                                @php
                                                    $name = $column['field'];
                                                @endphp

                                                @if ($column['type'] == 'text')
                                                    <td>{{ Auth::user()->string_truncate($key->$name) }}</td>

                                                @elseif ($column['field'] == 'image')
                                                    <td><img src="{{ asset($key->$name) }}" height="50px"></td>
                                                @else
                                                    <td>{{ $key->$name }}</td>
                                                @endif

                                                @endforeach

                                                <td class="text-right">
                                                    <a href="{{ route('edit', ['slug' => $title, 'id' => $key->id]) }}" class="btn btn-link btn-info btn-just-icon"><i class="material-icons">edit</i></a>
                                                    <a href="{{ route('delete', ['slug' => $title, 'id' => $key->id]) }}" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons">close</i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $inc++;
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td class="text-center" colspan="{{ (count($columns) + 2)}}">No Data Found</td>
                                        </tr>
                                        <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection