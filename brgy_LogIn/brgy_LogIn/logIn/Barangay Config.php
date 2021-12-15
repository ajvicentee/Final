<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="stylebc.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Barangay Config</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span> Barangay Balumpare</span></h2>
            <h2><span>Manila City, Philippines</span></h2>
        </div>
        <script>
            function logout() {
                location.href = "logout.php";
            }
        </script>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dash.php"><span class="las la-home"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="Barangay Info.php"><span class="las la-users"></span>
                        <span>Resident Information</span></a>
                </li>
                <li>
                    <a href="Barangay Schedules.php"><span class="las la-calendar"></span>
                        <span>Settlement Schedules</span></a>
                </li>
                <li>
                    <a href="Barangay Cert.php"><span class="las la-certificate"></span>
                        <span>Certificate Insurance</span></a>
                </li>
                <li>
                    <a href="Barangay Config.php" class="active"><span class="las la-cog"></span>
                        <span>Barangay Config</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Configuration
            </h2>

            <div class="user-wrapper">
                <img src="kpop.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Albert - Jonniel T. Vicente</h4>
                    <small>Member</small>
                    <button type="button" class="button" onclick="logout()">LOG OUT <span class="las la-sign-out-alt"></span></button>
                </div>
            </div>
        </header>
        <main>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Admin</h3>
                            <a href="newAcc.php"><button><span class="las la-plus"></span>New Admin</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Action</td>
                                            <td>First Name </td>
                                            <td>Last Name</td>
                                            <td>Middle Initial</td>
                                            <td>Birthdate</td>
                                            <td>Gender</td>
                                            <td>Age</td>
                                            <td>Username</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="view Admin.php"><button type="button" class="btn btn-primary"> <i class="lar la-eye"></i></button></a>
                                                <a href="update Admin.php"><button type="button" class="btn btn-danger"><i class="las la-user-edit"></i></button></a>
                                                <button type="button" class="btn btn-delete"><i class="las la-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>