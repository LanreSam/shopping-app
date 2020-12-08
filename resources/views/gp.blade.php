<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GP database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Grades
                        </div>
                        <div class="card-body">
                            @if(Session::has('msg-delete'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('msg-delete') }}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>course_code</th>
                                        <th>score</th>
                                        <th>course_unit</th>
                                        <th>grade</th>
                                        <th>points</th>
                                        <th>quality_points</th>
                                        <th>semester</th>
                                        <th>level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($grade as $gp)
                                        <tr>
                                            <td>{{ $gp->id }}</td>
                                            <td>{{ $gp->course_code }}</td>
                                            <td>{{ $gp->score }}</td>
                                            <td>{{ $gp->course_unit }}</td>
                                            <td>{{ $gp->grade }}</td>
                                            <td>{{ $gp->points }}</td>
                                            <td>{{ $gp->quality_points }}</td>
                                            <td>{{ $gp->semester }}</td>
                                            <td>{{ $gp->level }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="/add-grade" class="btn btn-success">Add Grade</a>
                <a href="#" class="btn btn-danger ml-3">Delete all</a>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
