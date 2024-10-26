<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paolo Dela Cruz - Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f4f8;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
            color: #007BFF;
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #007BFF;
            padding-bottom: 5px;
            margin-top: 30px;
        }
        section {
            margin-bottom: 30px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .job-item, .edu-item {
            margin-bottom: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-left: 5px solid #007BFF;
            border-radius: 5px;
        }
        .job-item h3, .edu-item h3 {
            margin: 0;
            color: #007BFF;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
        .skill-list {
            display: flex;
            flex-wrap: wrap;
        }
        .skill-item {
            background: #007BFF;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Paolo P Dela Cruz</h1>
            <p>Email: {{$details->email}}|Phone:{{$details->phone}} </p>
            <p>Location | </p>
        </header>
        
        <section class="objective">
            <h2>Objective</h2>
            <p>{{$details->objectives}}</p>
        </section>

        <section class="education">
            <h2>Education</h2>
            <div class="edu-item">
                <h3>{{$details->education}}</h3>
                <p></p>
               
            </div>
        </section>

        <section class="experience">
            <h2>Experience</h2>
            <div class="job-item">
                <h3>{{$details->experience1}}</h3>
 		<h3>{{$details->experience2}}</h3>
		<h3>{{$details->experience3}}</h3>
            
            </div>
        </section>

        <section class="skills">
            <h2>Skills</h2>
            <div class="skill-list">
                <div class="skill-item">{{$details->skill1}}</div>
                <div class="skill-item">{{$details->skill2}}</div>
                <div class="skill-item">{{$details->skill3}}</div>
                <div class="skill-item">{{$details->skill4ss}}</div>
            </div>
        </section>

        <footer>
            <p>© 2024 Paolo Dela Cruz. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>