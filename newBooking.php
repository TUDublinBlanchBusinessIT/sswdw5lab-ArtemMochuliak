<html>
    <body>
        <form method="POST" action="createNewBooking.php">
            <?php include("createMemberDropdown.php"); ?><br>
            Court ID: <input type="number" name="courtID"><br>
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>


        <!--
        Using a dropdown for memberID ensures that only valid member IDs 
        from the database can be selected. This helps avoid mistakes from invalid user input and stops database errors 
        caused by foreign key constraints — like in Step 1,
        when trying to insert a memberID (such as 13) that isn’t present in the database.
        -->

    </body>
</html>