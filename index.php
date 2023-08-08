<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
        crossorigin="anonymous">
</head>

<body style="background-color: #F7F8FA;">
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-dark-subtle p-3 ">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">RESUME MAKER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page"
                                href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="./cv.php">Resume</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container text-center mt-5">
            <div class="row g-2">
                <div class="col text-start">
                    <div class="card p-3">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-5">Make Your Resume</h4>

                            <!-- Form start -->
                            <div class="container">
                                <form action="saveData.php" method="post">
                                    <h5 class="card-title ">Personal Info</h5>
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <label for="" class="form-label">First Name
                                            </label>
                                            <input type="text" name="pfname" class="form-control"
                                                placeholder="First name">
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label for="" class="form-label">Last Name
                                            </label>
                                            <input type="text" name="plname" class="form-control"
                                                placeholder="Last name">
                                        </div>


                                        <div class="col-lg-4 mb-4">
                                            <label for="" class="form-label">Email Address
                                            </label>
                                            <input type="text" name="pemail" class="form-control"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="" class="form-label">Phone Number
                                            </label>
                                            <input type="text" name="pphone" class="form-control"
                                                placeholder="Phone">
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="" class="form-label">Date of Birth
                                            </label>
                                            <input type="date" name="pdate" class="form-control">
                                        </div>
                                    </div>


                                    <!-- Job Requred start -->
                                    <!-- Skills start -->
                                    <h5 class="card-title ">SKILLS </h5>
                                    <div class="row">
                                        <div class="container">
                                            <div class="col-lg d-flex" id="inputFieldsContainer">
                                                <!-- Existing input fields go here -->
                                                <input type="text" name="jobskill"
                                                    class="form-control mb-3  me-3" id="inputField1"
                                                    placeholder="Enter skill" />
                                            </div>
                                            <button class="btn btn-warning mt-1 mb-4 fw-medium"
                                                id="addInputFieldButton">Add Skill</button>
                                        </div>
                                    </div>


                                    <!-- CAREER SUMMARY start -->
                                    <h5 class="card-title ">CAREER SUMMARY</h5>
                                    <div class="row ">
                                        <div class="col-lg mb-4">
                                            <textarea name="jobcareer" id="" class=""
                                                style="width: 100%; height: 110px;"
                                                placeholder="Enter your career summary">

                                        </textarea>
                                        </div>
                                    </div>

                                    <!-- WORK EXPERIENCE start -->
                                    <h5 class="card-title ">WORK EXPERIENCE</h5>
                                    <div class="row ">
                                        <div class="col-lg-6" id="inputFieldsContainer">
                                            <!-- Existing input fields go here -->
                                            <label for="" class="form-label">Work
                                                Title</label>
                                            <input type="text" name="jobtitle"
                                                class="form-control mb-3  me-3" id="inputField1"
                                                placeholder="Title" />
                                        </div>
                                        <div class="col-lg-6 " id="inputFieldsContainer">
                                            <!-- Existing input fields go here -->
                                            <label for="" class="form-label">Work
                                                Sub-title (optional)</label>
                                            <input type="text" name="jobsubtitle"
                                                class="form-control mb-3  me-3" id="inputField1"
                                                placeholder="Sub-title(optional)" />
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label for="" class="form-label">Work Experience Summary
                                            </label>
                                            <textarea name="jobexperience" id="" class=""
                                                style="width: 100%; height: 110px;">

                                        </textarea>
                                        </div>
                                    </div>
                                    <!-- Job Requred End -->


                                    <!-- EDUCATION -->
                                    <h5 class="card-title ">EDUCATION</h5>
                                    <div class="row ">
                                        <div class="col-lg-12  mb-4">
                                            <label for="" class="form-label">Course Title</label>
                                            <input type="text" name="etitle" class="form-control"
                                                placeholder="Course Title">
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label for="" class="form-label">University Name</label>
                                            <input type="text" name="eversity" class="form-control"
                                                placeholder="University">
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label for="" class="form-label">Passing Year</label>
                                            <input type="text" name="epassyear" class="form-control"
                                                placeholder="Year">
                                        </div>
                                    </div>

                                    <!-- Language -->
                                    <h5 class="card-title ">Language</h5>
                                    <div class="row ">
                                        <div class="col-lg-12  mb-4">
                                            <label for="" class="form-label">Language</label>
                                            <select class="form-select w-25" name="elanguage">
                                                <option selected>Select</option>
                                                <option value="1">English</option>
                                                <option value="2">Bangla</option>

                                            </select>
                                        </div>

                                    </div>

                                    <button type="submit" name="submit"
                                        class="btn btn-primary my-5">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="mt-5">

    </footer>

    <script src="inputField.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>