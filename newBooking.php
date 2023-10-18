<html>
    <body>
        <form method="POST" action="createNewBooking.php">
        <?php include 'createMemberDropDown.php'; ?>
        <br>
            <!-- replace this line with an input tag for the memberID -->
            <!-- replace this line with an input tag for the courtID -->
            <br> Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            
            Court ID: <input type="text" name="courtID"/><br>
            <input type="submit">
        </form>
    </body>
</html>




            
            

 