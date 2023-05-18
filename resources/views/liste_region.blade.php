<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des régions</title>

    <style>
        body {
            background: #EEE;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            background: #FFF;
            width: 400px;
            max-height: 400px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 1px 1px 10px 2px gray;
        }

        th {
            background: blue;
            color: white;
            height: 40px;
            width: 125px;
            border-top-right-radius: 5px;
        }

        tr:nth-child(even){
            background: skyblue;
        }

        td {
            height: 40px;
            border-top: solid 1px gray;
            border-top: solid 1px gray;
        }

        .btn {
            display:flex;
        }

        span {
            display: flex;
            width: 60px;
            height: 40px;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .btn-delete {
            background: red;
        }

        .btn-edit {
            background: green;
        }
    </style>
</head>

<body>
    @if($liste->count() > 0 )

    <table cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Label</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($liste as $r)
            <tr>
                <td> {{$r->id}} </td>
                <td> {{$r->label}} </td>
                <td>
                    <div class="btn">
                        <div>
                            <span class="btn-delete">
                                <a href="/region_delete/{{$r->id}}">Delete</a>
                            </span>
                        </div>
                        <div>
                            <span class="btn-edit">
                                <a href="/form_update_region/{{$r->id}}">Edit</a>
                            </span>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>

</html>