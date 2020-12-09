<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Grade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- font awesome link --}}
    <script src="https://kit.fontawesome.com/48c2562a43.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header d-flex">
                            <a href="/gp"><i class="fas fa-arrow-left pt-1 mr-4" aria-hidden="true"></i></a>
                            Add new grade
                        </div>
                        <div class="card-body">
                            @if(Session::has('msg'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('msg') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('grade.submit') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="course_code">Course code</label>
                                    <input type="text" name="course_code" class="form-control" placeholder="Enter course code" required/>
                                </div>
                                <div class="form-group">
                                    <label for="score">Score</label>
                                    <input type="text" name="score" class="form-control" placeholder="Enter score" required/>
                                </div>
                                <div class="form-group">
                                    <label for="course_unit">Course unit</label>
                                    <input type="text" name="course_unit" class="form-control" placeholder="Enter course unit" required/>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group">
                                        <select name="semester" class="btn btn-dark">
                                            <option value="" disabled selected>Choose semester</option>
                                            <option value="HARMATTAN">HARMATTAN</option>
                                            <option value="RAIN">RAIN</option>
                                        </select>
                                    </div>
                                    <div class="form-group ml-3">
                                        <select name="level" class="btn btn-dark">
                                            <option value="" disabled selected>Choose level</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="600">600</option>
                                            <option value="700">700</option>
                                            <option value="800">800</option>
                                            <option value="">900</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-success mt-4"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
