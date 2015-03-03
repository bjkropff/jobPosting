<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/jobOpening.php';

    $app = new Silex\Application();

    $app->get("/", function() {
        return '<!DOCTYPE html>
        <html>
            <head>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
                <title>Job Opening</title>
            </head>
            <body>
                <div class="container">
                    <h1>Enter your job opening!</h1>
                    <form action="/results">
                        <div class="form-group">
                            <label for="title">Enter Title of Job:</label>
                            <input id="title" type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Enter Description:</label>
                            <input id = "description" type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Enter Name:</label>
                            <input id = "name" type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Enter Description:</label>
                            <input id = "email" type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Enter Phone:</label>
                            <input id = "phone" type="tel" name="phone" class="form-control">
                        </div>
                        <button type="submit" class="btn-success">Submit</button>
                    </form>
                </div>
            </body>
        </html>
';
    });

    $app->get("/results", function() {


    });

    return $app;

 ?>
