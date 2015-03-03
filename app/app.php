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
                            <label for="email">Enter Email:</label>
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

        $title = $_GET["title"];
        $description = $_GET["description"];
        $name = $_GET["name"];
        $email = $_GET["email"];
        $phone = $_GET["phone"];

        if($title && $description && $name && $email && $phone)
        {
            $contact = new Contact($name, $email, $phone);
            $posting = new JobOpening($title, $description, $contact);

            $output = '<!DOCTYPE html>
                         <html>
                         <head>
                         <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
                            <title>Job Posting Results</title>
                         </head>
                         <body>


            ';
            $output .= "<h1>" . $posting->getTitle() . "</h1>";
            $output .= "<h3>" . $posting->getDescription() . "</h3>";

            $contact_array = $posting->getContact();
            $output .= "<ul>";
            foreach($contact_array as $item) {
                $output .= "<li>" . $item . "</li>";
            }


            $output .= "</ul>
            </body>
            </html>
            ";
            return $output;

        } else {
            $error = "Please fill out all required fields";
        }

    });

    return $app;

 ?>
