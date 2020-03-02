@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <form class="row" method="post" action="{{ route('store', ['slug' => $title]) }}" enctype="multipart/form-data">
            @csrf
            
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('CREATE ') . strtoupper($title)}}</h4>
                    </div>
                    <div class="card-body">

                        @foreach ($columns as $column)

                            @php
                                $field = $column['field'];
                                $type = $column['type'];
                                $field__upr = strtoupper(str_replace('_', ' ', $column['field']));
                            @endphp

                            @if ($type == "int(11)")

                                <div class="form-group">
                                    <label>{{ $field__upr }}</label>
                                    <input type="number" class="form-control" name="{{ $field }}" value="0" />
                                </div>

                            @elseif ($type == "tinyint(1)")

                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="{{ $field }}">
                                            {{ $field__upr }}
                                            <span class="form-check-sign">
                                            <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            @elseif ($type == "text")

                                <div class="form-group">
                                    <label>{{ $field__upr }}</label>
                                    
                                    @if ($field == 'content')
                                    
                                    <textarea name="{{ $field }}" id="ckeditor" class="form-control" cols="10" rows="6" placeholder="TYPE TEXT RE ..." ></textarea>
                                    
                                    @else
                                    
                                    <textarea name="{{ $field }}" class="form-control" cols="10" rows="6" placeholder="TYPE TEXT HERE ..." ></textarea>

                                    @endif

                                </div>
                                
                            @else

                                @if($field == 'page_model')

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        
                                        <select name="{{ $field }}" class="form-control singleSelect">

                                        @foreach($models as $model)

                                        @php
                                            $optionValue = str_replace('.blade', '', $model['filename']);
                                        @endphp
                                        <option value="{{ $optionValue }}">{{ strtoupper($optionValue) }}</option>

                                        @endforeach

                                        </select>
                                    </div>

                                @elseif($field == 'image')

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        <input type="file" class="form-control" name="{{ $field }}" />
                                    </div>

                                @else

                                    <div class="form-group">
                                        <label>{{ $field__upr }}</label>
                                        <input type="text" class="form-control" name="{{ $field }}" placeholder="{{ $field__upr }}" />
                                    </div>

                                @endif

                            @endif

                        @endforeach
                        
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-github">{{ __('CREATE ') . strtoupper($title)}}</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection