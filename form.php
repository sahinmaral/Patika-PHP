<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Post Example</title>
</head>
<body class="container mt-3">
    <h1>POST</h1>
    <form action="post.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname">
        </div>

        <div class="mb-3">
            <label for="job" class="form-label">Job</label>
            <select id="job" class="form-select" name="job">
                <option>Back-end Developer</option>
                <option>Front-end Developer</option>
                <option>Fullstack Developer</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="interests" class="form-label">Interests</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="football" value="Futbol oynamak" name="interests[]">
                <label class="form-check-label" for="football">Futbol oynamak</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="painting" value="Resim cizmek" name="interests[]">
                <label class="form-check-label" for="painting">Resim cizmek</label>
            </div>
        </div>

        <button type="submit" value="" class="btn btn-primary w-100">Submit</button>
    </form>


    <form action="get.php" method="get">
        <div class="mt-3">
            <label for="page" class="form-label">Page</label>
            <select id="page" class="form-select" name="page" onchange="this.form.submit()">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>