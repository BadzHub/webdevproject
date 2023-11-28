<head><title>Add Syllabus</title></head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width ="25%">
            <tr>
                <td>Syllabus Code</td>
               <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject"><!-- HTML input for Drop-Down type menu -->
                        <?php
                            include_once(".///dbconnection/mysqlconfig_connection.php");//include Code to connect to Database
                            $query = "SELECT * FROM tblsubjects";//select all entries in tblsubjects
                            $result = mysqli_query($dbc, $query);
                            while ($res = mysqli_fetch_array($result)) {//Loop to display ALL subjects as options in the drop-down menu
                                echo "<option value=\"".$res["subject_id"]."\>";
                                echo "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
