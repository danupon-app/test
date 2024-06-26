<!DOCTYPE html>
<html>
<head>
    <title>Daily Log</title>
</head>
<body>
    <h1>Daily Log</h1>

    <h2>Add Log</h2>
    <form method="post">
        <label for="job_type">Job Type:</label>
        <select name="job_type" id="job_type">
            <option value="Development">Development</option>
            <option value="Test">Test</option>
            <option value="Document">Document</option>
        </select><br>

        <label for="job_name">Job Name:</label>
        <input type="text" name="job_name" id="job_name" required><br>

        <label for="start_time">Start Time:</label>
        <input type="datetime-local" name="start_time" id="start_time" required><br>

        <label for="end_time">End Time:</label>
        <input type="datetime-local" name="end_time" id="end_time" required><br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select><br>

        <button type="submit" name="add">Add Log</button>
    </form>

    <h2>Update Log</h2>
    <form method="post">
        <label for="id">Log ID:</label>
        <input type="number" name="id" id="id" required><br>

        <label for="job_type">Job Type:</label>
        <select name="job_type" id="job_type">
            <option value="Development">Development</option>
            <option value="Test">Test</option>
            <option value="Document">Document</option>
        </select><br>

        <label for="job_name">Job Name:</label>
        <input type="text" name="job_name" id="job_name" required><br>

        <label for="start_time">Start Time:</label>
        <input type="datetime-local" name="start_time" id="start_time" required><br>

        <label for="end_time">End Time:</label>
        <input type="datetime-local" name="end_time" id="end_time" required><br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select><br>

        <button type="submit" name="update">Update Log</button>
    </form>
</body>
</html>
