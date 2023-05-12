<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
     
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="mt-2">
        <form action="/filter" method="GET">
            From:<input class="mr-2"type="date" name="from">
            To:<input class="mr-2" type="date" name="to">
            Name:<input class="mr-2 " type="text" name="name">
            <button type="submit" class="btn btn-success btn-sm">Search</button>
        </form>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Token</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                </tr>
            </tbody>
        </table>
    </div> --}}
    {{-- <div class="panel-heading">
        <div class="row">
            <div class="col-md-5">Total Records - <b><span id="total_records"></span></b></div>
            <div class="col-md-5">
                <div class="input-group input-daterange ml-4">
                    <input type="text" name="from_date" id="from_date" readonly class="form-control" />
                    <div class="input-group-addon">to</div>
                    <input type="text" name="to_date" id="to_date" readonly class="form-control" />
                </div>
            </div>
            <div class="col-md-2">
                <button type="button" name="filter" id="filter" class="btn btn-info btn-sm ">Filter</button>
                <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm ml-2">Refresh</button>
            </div>
        </div>
    </div>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th width="6%">name</th>
                <th width="6%">email</th>
               
            </tr>
        </thead>
    </table> --}}
    <form action="{{route('file-export')}}" method="post">
        @csrf
        <input type="date" name="from_date" class="form-control">
        <input type="date" name="to_date" class="form-control">
        <button type='submit'>Submit</button>
    </form>
   
</x-app-layout>
{{-- <script>
    $(document).ready(function () {
    var date = new Date();

    $('.input-daterange').datepicker({
        todayBtn: 'linked',
        format: 'yyyy-mm-dd',
        autoclose: true
    });

    var _token = $('input[name="_token"]').val();

    fetch_data();

    function fetch_data(from_date = '', to_date = '') {
        $.ajax({
            url: "{{ route('filter') }}",
            method: "POST",
            data: {
                from_date: from_date,
                to_date: to_date,
                _token: _token
            },
            dataType: "json",
            success: function (data) {
                var output = '';
                $('#total_records').text(data.length);
                for (var count = 0; count < data.length; count++) {
                    output += '<tr>';
                    output += '<td>' + data[count].name + '</td>';
                    output += '<td>' + data[count].email + '</td>';
                   
                }
                $('tbody').html(output);
            }
        })
    }

    $('#filter').click(function () {
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        if (from_date != '' && to_date != '') {
            fetch_data(from_date, to_date);
        } else {
            alert('Both Date is required');
        }
    });

    $('#refresh').click(function () {
        $('#from_date').val('');
        $('#to_date').val('');
        fetch_data();
    });
});
</script> --}}

