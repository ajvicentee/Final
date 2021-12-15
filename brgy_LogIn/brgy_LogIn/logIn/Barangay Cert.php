<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="stylec.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Barangay Certificate</title>
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
                    <a href="Barangay Cert.php" class="active"><span class="las la-certificate"></span>
                        <span>Certificate Insurance</span></a>
                </li>
                <li>
                    <a href="Barangay Config.php"><span class="las la-cog"></span>
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
                Certificate Insurance
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
                            <h3>Issuing Barangay Clearance</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>RESIDENT DETAILS</td>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <form>
                                            <tr>
                                                <td>Family Name:
                                                    <input type="text" name="Fname">
                                                </td>
                                            </tr>
                                        </form>
                                        <tr>
                                            <form>
                                        <tr>
                                            <td>First Name:
                                                <input type="text" name="Fname">
                                            </td>
                                        </tr>
                                        </form>
                                        </tr>
                                        <tr>
                                            <form>
                                        <tr>
                                            <td>Middle Name:
                                                <input type="text" name="Fname">
                                            </td>
                                        </tr>
                                        </form>
                                        </tr>
                                        <tr>
                                            <form>
                                        <tr>
                                            <td>Gender <select name="cars" id="cars">
                                                    <option value="volvo">Male</option>
                                                    <option value="saab">Female</option>
                                                    <option value="opel">Rather not to say</option>
                                                </select>
                                            </td>
                                        </tr>
                                        </form>
                                        </td>
                                        </tr>
                                        <tr>
                                            <form>
                                        <tr>
                                            <td>Birthdate
                                                <label for="start"></label>
                                                <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                            </td>
                                        </tr>
                                        </form>
                                        </tr>
                                        <tr>
                                            <form>
                                        <tr>
                                            <td>Civil Status
                                                <select name="cars" id="cars">
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Seperated">Seperated</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </td>
                                        </tr>
                                        </form>
                                        </tr>
                                        <tr>
                                            <form>
                                        <tr>
                                            <td>Purpose
                                                <textarea name="paragraph_text" cols="50" rows="5"></textarea>
                                            </td>
                                        </tr>
                                        </form>
                                        </tr>
                                        <thead>
                                            <tr>
                                                <td>RESIDENT DETAILS</td>
                                            </tr>
                                        </thead>
                                    </tbody>
                                    <tr>
                                        <td>OR Number <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></td>

                                    </tr>
                                    <tr>
                                        <form>
                                    <tr>
                                        <td>OR Date
                                            <label for="start"></label>
                                            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                        </td>
                                    </tr>
                                    </form>
                                    </tr>
                                    <thead>
                                        <tr>
                                            <td>CEDULA DETAILS</td>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    <tr>
                                        <td>Cedula Number: <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></td>

                                    </tr>
                                    <tr>
                                        <form>
                                    <tr>
                                        <td>Cedula Date Issued:
                                            <label for="start"></label>
                                            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                        </td>
                                    </tr>
                                    </form>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <button> <span class="las la-ban"></span> Cancel</button>
            <button> <span class="las la-print"></span> Generate Report</button>
        </main>
    </div>
</body>

</html>