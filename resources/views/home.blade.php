@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <case-index :case-categories="{{ json_encode($case_categories) }}" :beneficiaries="{{ json_encode($beneficiaries) }}" :beneficiary-cases="{{ json_encode($beneficiary_cases) }}"></case-index>
</div>
@endsection
