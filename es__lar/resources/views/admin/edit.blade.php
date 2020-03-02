@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        
        <form class="row" method="post" action="{{ route('update', ['slug' => $title, 'id' => $edit->id]) }}" enctype="multipart/form-data">
            @csrf
            
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('EDIT ') . strtoupper($title)}}</h4>
                    </div>
                    <div class="card-body">

                        @foreach ($columns as $column)
                            @php
                                $field = $column['field'];
                                $type = $column['type'];
                                $field__upr = strtoupper(str_replace('_', ' ', $column['field']));
                                $oldValue = $edit->$field;
                            @endphp

                            @if ($type == "int(11)")

                                <div class="form-group">
                                    <label>{{ $field__upr }}</label>
                                    <input type="number" class="form-control" name="{{ $field }}" value="{{ $oldValue }}" />
                                </div>

                            @elseif ($type == "tinyint(1)")

                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="{{ $field }}" {{ $oldValue ? 'checked' : '' }} >
                                            {{ $field }}
                                            <span class="form-check-sign">
                                            <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            @elseif ($type == "text")

                                @if ($field == 'content')
                                
                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        <textarea name="{{ $field }}" id="ckeditor" class="form-control" cols="10" rows="6" placeholder="TYPE TEXT RE ..." >{{ $oldValue }}</textarea>
                                    </div>

                                @else

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        <textarea name="{{ $field }}" class="form-control" cols="10" rows="6" placeholder="TYPE TEXT HERE ..." >{{ $oldValue }}</textarea>
                                    </div>

                                @endif
                                
                            @else

                                @if ($field == 'page_model')

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        
                                        <select name="{{ $field }}" class="form-control singleSelect">

                                            @foreach($models as $model)

                                                @php
                                                    $optionValue = str_replace('.blade', '', $model['filename']);
                                                @endphp
                                                
                                                <option 
                                                value="{{ $optionValue }}"
                                                {{ ($optionValue == $oldValue ? 'selected' : '') }} >
                                                    {{ strtoupper($optionValue) }}
                                                </option>

                                            @endforeach

                                        </select>
                                    </div>

                                @elseif ($field == 'image')

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        <input type="file" class="form-control" name="{{ $field }}" />
                                    </div>

                                    @if ($oldValue)
                                        <div class="text-center">
                                            <img src="{{ asset($oldValue) }}" height="250px" alt="">
                                        </div>
                                    @endif

                                @else

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        <input type="text" class="form-control" name="{{ $field }}" placeholder="{{ $field__upr }}" value="{{ $oldValue }}" />
                                    </div>

                                @endif

                            @endif

                        @endforeach
                        
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-github">{{ __('EDIT ') . strtoupper($title)}}</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection