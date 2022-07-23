{{-- extends mater --}}
@extends('dashboard.master')

{{-- title --}}
@section('title')
    Past Employees
@endsection

    
    {{-- content --}}   
@section('content')
{{-- Past Employees --}}
<div class="w-full mt-4">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Past Employees
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full table-auto bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Employee Id</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Date Employeed</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Job</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="w-1/6 text-left py-3 px-4">Emp001</td>
                    <td class="w-1/6 text-left py-3 px-4">Jean Lian Smith</td>
                    <td class="w-1/6 text-left py-3 px-4">02-08-2015</td>
                    <td class="w-1/6 text-left py-3 px-4">Developer</td>
                    <td class="w-1/6 text-left py-3 px-4">Current</td>
                    <td class="w-1/6 py-3 px-4">
                        <i class="fa fa-eye text-green-400"></i>           
                        <i class="fa fa-edit text-blue-400"></i>
                        <i class="fa fa-trash text-red-400"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
    
    {{-- script --}}    
@section('script')

@endsection